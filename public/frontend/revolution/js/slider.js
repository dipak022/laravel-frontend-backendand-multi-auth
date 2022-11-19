    
    // homepage-01

    var tpj = jQuery;
    var revapi1;
    if(window.RS_MODULES === undefined) window.RS_MODULES = {};
    if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider11"] = {once: RS_MODULES.modules["revslider11"]!==undefined ? RS_MODULES.modules["revslider11"].once : undefined, init:function() {
    window.revapi1 = window.revapi1===undefined || window.revapi1===null || window.revapi1.length===0  ? document.getElementById("rev_slider_1_1") : window.revapi1;
    if(window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length==0) { window.revapi1initTry = window.revapi1initTry ===undefined ? 0 : window.revapi1initTry+1; if (window.revapi1initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider11"].init()}); return;}
    window.revapi1 = jQuery(window.revapi1);
    if(window.revapi1.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_1_1"); return;}
    revapi1.revolutionInit({
        revapi:"revapi1",
        DPR:"dpr",
        sliderLayout:"fullwidth",
        visibilityLevels:"1400,1200,768,576",
        gridwidth:"1400,1200,768,576",
        gridheight:"600,580,460,320",
        perspective:600,
        perspectiveType:"global",
        editorheight:"600,580,460,320",
        responsiveLevels:"1400,1200,768,576",
        delay:9000,
        progressBar:{disableProgressBar:true},
        navigation: {
          wheelCallDelay:1000,
          onHoverStop:false,
          arrows: {
            enable:true,
            style:"custom",
            hide_onmobile:true,
            hide_under:778,
            hide_onleave:true,
            left: {
              h_offset:30
            },
            right: {
              h_offset:30
            }
          }
        },
        viewPort: {
          global:false,
          globalDist:"-200px",
          enable:false
        },
        fallbacks: {
          allowHTML5AutoPlayOnAndroid:true
        },
    });
    
    }} 
    if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};

    // homepage-02

    var tpj = jQuery;
    var revapi2;
    if(window.RS_MODULES === undefined) window.RS_MODULES = {};
    if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider21"] = {once: RS_MODULES.modules["revslider21"]!==undefined ? RS_MODULES.modules["revslider21"].once : undefined, init:function() {
    window.revapi2 = window.revapi2===undefined || window.revapi2===null || window.revapi2.length===0  ? document.getElementById("rev_slider_2_1") : window.revapi2;
    if(window.revapi2 === null || window.revapi2 === undefined || window.revapi2.length==0) { window.revapi2initTry = window.revapi2initTry ===undefined ? 0 : window.revapi2initTry+1; if (window.revapi2initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider21"].init()}); return;}
    window.revapi2 = jQuery(window.revapi2);
    if(window.revapi2.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_2_1"); return;}
    revapi2.revolutionInit({
        revapi:"revapi2",
        DPR:"dpr",
        sliderLayout:"fullwidth",
        visibilityLevels:"1400,1200,878,576",
        gridwidth:"1400,1200,878,676",
        gridheight:"650,650,450,420",
        perspective:650,
        perspectiveType:"global",
        editorheight:"650,650,450,420",
        responsiveLevels:"1400,1200,878,676",
        progressBar:{disableProgressBar:true},
        navigation: {
          onHoverStop:false,
          arrows: {
                enable:false,
                style:"hesperiden",
                hide_onmobile:true,
                hide_under:778,
                hide_onleave:true,
                left: {
                  h_offset:30
                },
                right: {
                  h_offset:30
                }
              }
        },
        viewPort: {
          global:false,
          globalDist:"-200px",
          enable:false
        },
        fallbacks: {
          allowHTML5AutoPlayOnAndroid:true
        },
    });
    
    }} 
    if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};

    // homepage-03

    var tpj = jQuery;
    var revapi3;
    if(window.RS_MODULES === undefined) window.RS_MODULES = {};
    if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider31"] = {once: RS_MODULES.modules["revslider31"]!==undefined ? RS_MODULES.modules["revslider31"].once : undefined, init:function() {
    window.revapi3 = window.revapi3===undefined || window.revapi3===null || window.revapi3.length===0  ? document.getElementById("rev_slider_3_1") : window.revapi3;
    if(window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length==0) { window.revapi3initTry = window.revapi3initTry ===undefined ? 0 : window.revapi3initTry+1; if (window.revapi3initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider31"].init()}); return;}
    window.revapi3 = jQuery(window.revapi3);
    if(window.revapi3.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_3_1"); return;}
    revapi3.revolutionInit({
        revapi:"revapi3",
        DPR:"dpr",
        sliderLayout:"fullwidth",
        visibilityLevels:"1400,1200,888,576",
        gridwidth:"1400,1200,888,576",
        gridheight:"750,680,500,300",
        perspective:750,
        perspectiveType:"global",
        editorheight:"750,680,500,300",
        responsiveLevels:"1400,1200,888,576",
        progressBar:{disableProgressBar:true},
        navigation: {
          onHoverStop:false,
          arrows: {
                enable:true,
                style:"custom",
                hide_onmobile:true,
                hide_under:778,
                hide_onleave:true,
                left: {
                  h_offset:30
                },
                right: {
                  h_offset:30
                }
              }
        },
        parallax: {
          levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,30],
          type:"mouse",
          speed:"10ms"
        },
        scrolleffect: {
          set:true,
          multiplicator:1.3,
          multiplicator_layers:1.3
        },
        sbtimeline: {
          set:true
        },
        viewPort: {
          global:false,
          globalDist:"-200px",
          enable:false
        },
        fallbacks: {
          allowHTML5AutoPlayOnAndroid:true
        },
    });
    
    }} 
    if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};


    // reqired along js

    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = true;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
                            
    function setREVStartSize(e) {
    window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;        
    window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
            e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
            if(e.layout==="fullscreen" || e.l==="fullscreen")
                newh = Math.max(e.mh,window.RSIH);
            else{
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
                e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
                                    
                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
                for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
                var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
                newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el!==null && el) el.style.height = newh+"px";
            el = document.getElementById(e.c+"_wrapper");
            if (el!==null && el) {
                el.style.height = newh+"px";
                el.style.display = "block";
            }
        } catch(e){
            console.log("Failure at Presize of Slider:" + e)
        }
    };