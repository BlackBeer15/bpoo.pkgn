'use strict';

(function () {
    function init() {
        var router = new Router([            
            new Route('basicInformation', 'basicInformation.html'),
            new Route('education', 'education.html'),
            new Route('careerGuidance', 'careerGuidance.html'),
            new Route('events', 'events.html'),
            new Route('partners', 'partners.html'),
            new Route('accessibleEnvironment', 'accessibleEnvironment.html'),
            new Route('courses', 'courses.html'),
            new Route('passcourseasist', 'passcourseasist.html'),
            new Route('passcoursetutor', 'passcoursetutor.html'),
            new Route('passcoursedostupnost', 'passcoursedostupnost.html'),
            new Route('virtualPriem', 'virtualPriem.html'),
            new Route('error', 'error.html')
        ]);
    }
    init();
}());