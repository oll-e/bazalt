var angularComponents = [],
    modules = [];

for (var componentName in components) {
    var file = components[componentName];
    modules.push(file);
    angularComponents.push(componentName);
}

require(['modernizr', 'bazalt-cms', 'bootstrap', 'bz-switcher'].concat(modules), function(bazaltCMS) {

    var app = angular.module('admin', ['bazalt-cms', 'bzSwitcher'].concat(angularComponents)).
    config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
        $routeProvider.
        when('/', {controller: 'IndexCtrl', templateUrl:'/App/Admin/views/index.html'}).
        when('/settings', {redirectTo:'/settings/general'}).
        when('/settings/:part', {controller: 'SettingsCtrl', templateUrl:'/App/Admin/views/settings.html'}).
        otherwise({redirectTo:'/'});

        //$locationProvider.html5Mode(true);
        $locationProvider.hashPrefix('!');
    }]).
    run(['$rootScope', 'LanguageService', 'dashboard', function($rootScope, LanguageService, dashboard) {
        $rootScope.activateMenu = function(component) {
            for (var i = 0; i < dashboard.mainMenu.length; i++) {
                dashboard.mainMenu[i].active = (component == dashboard.mainMenu[i].component);
            }
        };
        $('#global_loading').hide();
    }]).
    value('dashboard', {
        mainMenu: []
    })
    .factory('SettingsService', ['$resource', function($resource) {
        return $resource('/rest.php/app/settings', { 'id': '@' }, {
            generateNewKey: { method: 'GET', params: { 'action': 'newSecretKey' } }
        });
    }])

    app.directive('loadingContainer', function () {
        return {
            restrict: 'A',
            scope: false,
            link: function(scope, element, attrs) {
                var loadingLayer = $('<div class="loading"></div>').appendTo(element);
                $(element).addClass('loading-container');
                scope.$watch(attrs.loadingContainer, function(value) {
                    loadingLayer.toggle(value);
                });
            }
        };
    });
    app.directive('help', ['$timeout', function ($timeout) {
        return {
            restrict: 'E',
            scope: {
            title:        '@title',
            placement:    '@placement',
            height:   '@height',
            data:     '=data',
            selectFn: '&select',
            hoverFn: '&hover'
            },
            link: function($scope, $elm, $attr) {
                var html = $('<a href="javascript:;"><i class="glyphicon glyphicon-question-sign"></i></a>');
                var content = $elm.html();
                $elm.replaceWith(html);

                html.popover({
                    html: true,
                    placement: $attr.placement || 'bottom',
                    trigger: 'click',
                    //delay: {hide: '300'},
                    content: content,
                    title: $attr.title,
                    container: 'body'
                });
            }
        };
    }]);

    app.controller('IndexCtrl', ['$scope', '$rootScope', function ($scope, $rootScope) {
        $scope.activateMenu('CMS'); // activate admin menu
        $rootScope.breadcrumbs = [
            {
                'title' : 'Dashboard',
                'url': '#!/'
            }
        ];
    }]);
    app.controller('SettingsCtrl', ['$scope', '$rootScope', 'SettingsService', '$routeParams', function ($scope, $rootScope, SettingsService, $routeParams) {
        $scope.activateMenu('CMS'); // activate admin menu
        $scope.loading = {};
        $scope.part = $routeParams.part;

        $rootScope.breadcrumbs = [
            {
                'title' : 'Dashboard',
                'url': '#!/'
            },
            {
                'title' : 'Settings',
                'url': '#!/settings'
            }
        ];
        $scope.loading.settings = true;
        $scope.settings = SettingsService.get(function() {
            $scope.loading.settings = false;
        });

        $scope.saveSettings = function(settings) {
            $scope.loading.settings = true;
            settings.$save(function() {
                $scope.loading.settings = false;
            });
        }
        $scope.generateNewKey = function() {
            $scope.loading.key = true;
            SettingsService.generateNewKey(function(result) {
                $scope.loading.key = false;
                $scope.settings.secret_key = result.key;
            });
        }
    }]);

    app.controller('LanguagesSettingsCtrl', ['$scope', '$location', '$session', '$window', 'LanguageService', function ($scope, $location, $session, $window, LanguageService) {
        $scope.languages = LanguageService.query({'all': true});
    }]);

    app.controller('MenuCtrl', ['$scope', '$location', '$session', '$window', 'dashboard', function ($scope, $location, $session, $window, dashboard) {
        $(window).bind('resize', function(){
            $scope.wHeight = $(window).innerHeight();
            if (!$scope.$$phase) {
                $scope.$apply();
            }
        }).trigger('resize');

        $scope.more = { width: 0, menu: [], show: false };
        $scope.menu = dashboard.mainMenu;
        $scope.sideMenu = $scope.menu;

        $scope.$watch('wHeight', function(value) {
            var height = 62 * 2 + 40, i = 0, menu = [];
            var sidebar = $('.sidebar');

            if ($(window).innerWidth() <= 768) {
                $scope.sideMenu = $scope.menu;
                $scope.more.menu = [];
                $scope.more.show = false;
                return;
            }

            do {
                height += 62;
                menu.push($scope.menu[i++]);
                if ($scope.menu.length == menu.length) {
                    break;
                }
            } while (height < sidebar.height());
            $scope.sideMenu = menu;
            menu = [];
            for (var j = i, max = $scope.menu.length, width = 0; j < max; j++, width += 60) {
                menu.push($scope.menu[j]);
            }
            $scope.more.width = width;
            $scope.more.menu = menu;
        });
    }]);

    angular.bootstrap(document.documentElement, ['admin']);

});