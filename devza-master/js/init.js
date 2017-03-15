$(document).ready(function () {
    // hide our element on page load
    $('#abouttitle').css('opacity', 0);
    $('#aboutpgone').css('opacity', 0);
    $('#aboutpgtwo').css('opacity', 0);
    $('#aboutpgthree').css('opacity', 0);
    $('#portone').css('opacity', 0);
    $('#porttwo').css('opacity', 0);
    $('#portthree').css('opacity', 0);
    $('#portfour').css('opacity', 0);
    $('#portfive').css('opacity', 0);
    $('#portsix').css('opacity', 0);
    $('#serviceone').css('opacity', 0);
    $('#servicetwo').css('opacity', 0);
    $('#servicethree').css('opacity', 0);
    $('#servicefour').css('opacity', 0);
    $('#servicefive').css('opacity', 0);
    $('#servicesix').css('opacity', 0);
    $('#designertitle').css('opacity', 0);
    $('#designertext').css('opacity', 0);
    $('#designerimg').css('opacity', 0);
    $('#servicesix').css('opacity', 0);
    
    $('#abouttitle').waypoint(function () {
        $('#abouttitle').addClass('fadeIn');
    }, {
        offset: '75%'
    });
    $('#aboutpgone').waypoint(function () {
        $('#aboutpgone').addClass('fadeIn');
    }, {
        offset: '75%'
    });
    $('#aboutpgtwo').waypoint(function () {
        $('#aboutpgtwo').addClass('fadeIn');
    }, {
        offset: '75%'
    });
    $('#aboutpgthree').waypoint(function () {
        $('#aboutpgthree').addClass('fadeIn');
    }, {
        offset: '75%'
    });
    $('#portone').waypoint(function () {
        $('#portone').addClass('fadeInLeft');
    }, {
        offset: '60%'
    });
    $('#porttwo').waypoint(function () {
        $('#porttwo').addClass('fadeInDown');
    }, {
        offset: '65%'
    });
    $('#portthree').waypoint(function () {
        $('#portthree').addClass('fadeInRight');
    }, {
        offset: '70%'
    });
    $('#portfour').waypoint(function () {
        $('#portfour').addClass('fadeInLeft');
    }, {
        offset: '60%'
    });
    $('#portfive').waypoint(function () {
        $('#portfive').addClass('fadeInDown');
    }, {
        offset: '65%'
    });
    $('#portsix').waypoint(function () {
        $('#portsix').addClass('fadeInRight');
    }, {
        offset: '70%'
    });
    $('#serviceone').waypoint(function () {
        $('#serviceone').addClass('fadeInLeft');
    }, {
        offset: '75%'
    });
    $('#servicetwo').waypoint(function () {
        $('#servicetwo').addClass('fadeInRight');
    }, {
        offset: '78%'
    });
    $('#servicethree').waypoint(function () {
        $('#servicethree').addClass('fadeInLeft');
    }, {
        offset: '75%'
    });
    $('#servicefour').waypoint(function () {
        $('#servicefour').addClass('fadeInRight');
    }, {
        offset: '78%'
    });
    $('#servicefive').waypoint(function () {
        $('#servicefive').addClass('fadeInLeft');
    }, {
        offset: '75%'
    });
    $('#servicesix').waypoint(function () {
        $('#servicesix').addClass('fadeInRight');
    }, {
        offset: '78%'
    });
    $('#designertitle').waypoint(function () {
        $('#designertitle').addClass('fadeIn');
    }, {
        offset: '78%'
    });
    $('#designertext').waypoint(function () {
        $('#designertext').addClass('fadeIn');
    }, {
        offset: '78%'
    });
    $('#designerimg').waypoint(function () {
        $('#designerimg').addClass('fadeIn');
    }, {
        offset: '78%'
    });
});
document.getElementById('unhide-btn').onclick = function () {
    document.getElementById('portfolio-hidden1').style.display = 'inherit';
    document.getElementById('portfolio-hidden2').style.display = 'inherit';
    document.getElementById('portfolio-hidden3').style.display = 'inherit';
    document.getElementById('unhide-btn').style.display = 'none';
    document.getElementById('unhide-btn-2').style.display = 'initial';
};
document.getElementById('unhide-btn-2').onclick = function () {
    document.getElementById('portfolio-hidden4').style.display = 'inherit';
    document.getElementById('portfolio-hidden5').style.display = 'inherit';
    document.getElementById('portfolio-hidden6').style.display = 'inherit';
    document.getElementById('unhide-btn-2').style.display = 'none';
    document.getElementById('unhide-btn-3').style.display = 'initial';
};
document.getElementById('unhide-btn-3').onclick = function () {
    document.getElementById('portfolio-hidden7').style.display = 'inherit';
    document.getElementById('portfolio-hidden8').style.display = 'inherit';
    document.getElementById('portfolio-hidden9').style.display = 'inherit';
    document.getElementById('unhide-btn-3').style.display = 'none';
    document.getElementById('unhide-btn-4').style.display = 'initial';
};
document.getElementById('unhide-btn-4').onclick = function () {
    document.getElementById('nomorehere').style.display = 'initial';
    document.getElementById('unhide-btn-4').style.display = 'none';
    document.getElementById('btn-hideall').style.display = 'initial';
};
document.getElementById('btn-hideall').onclick = function () {
    document.getElementById('portfolio-hidden1').style.display = 'none';
    document.getElementById('portfolio-hidden2').style.display = 'none';
    document.getElementById('portfolio-hidden3').style.display = 'none';
    document.getElementById('portfolio-hidden4').style.display = 'none';
    document.getElementById('portfolio-hidden5').style.display = 'none';
    document.getElementById('portfolio-hidden6').style.display = 'none';
    document.getElementById('portfolio-hidden7').style.display = 'none';
    document.getElementById('portfolio-hidden8').style.display = 'none';
    document.getElementById('portfolio-hidden9').style.display = 'none';
    document.getElementById('nomorehere').style.display = 'none';
    document.getElementById('unhide-btn').style.display = 'initial';
    document.getElementById('unhide-btn-2').style.display = 'none';
    document.getElementById('unhide-btn-3').style.display = 'none';
    document.getElementById('unhide-btn-4').style.display = 'none';
    document.getElementById('btn-hideall').style.display = 'none';
};
smoothScroll.init({
    selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
    selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
    speed: 300, // Integer. How fast to complete the scroll in milliseconds
    easing: 'easeInOutCubic', // Easing pattern to use
    offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
    callback: function (anchor, toggle) {} // Function to run after scrolling
});