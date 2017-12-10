$(window).resize(_.throttle(function(){
    tc.rebuild();
}, 500));