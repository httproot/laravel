/*
* LM.LIB.SliderShowV2
* =====================================
* Author: KZIDAITOU
* Creat Date: 2012-6-12
*/

LM = window.LM || {};
LM.LIB = LM.LIB || {};
LM.LIB.SliderShowV2 = function() {
  var oThis = this;
  var _oDefaultConfig = {
    oWrap : $('#sliderShow .wrap').eq(0),
    oContainer : $('#sliderShow .container').eq(0),
    aItems : $('#sliderShow .item'),
    oButtonPrev : $('#sliderShow .btn_prev').eq(0),
    oButtonNext : $('#sliderShow .btn_next').eq(0),
    aItemSize : [0, 0],
    sDirection : 'h',
    nStep : 1,
    nCurrent : 1,
    bAutoPlay : false,
    nDelay : 3000
  };

  oThis.fInit = function(oConfig) {
    oConfig = $.extend(_oDefaultConfig, oConfig);
    oThis.nCount = oConfig.aItems.length;
    oThis.nCurrent = oConfig.nCurrent;
    oThis.nStep = oConfig.nStep;
    oThis.oContainer = oConfig.oContainer;
    oThis.aItems = oConfig.aItems;
    oThis.oButtonPrev = oConfig.oButtonPrev;
    oThis.oButtonNext = oConfig.oButtonNext;
    oThis.bAutoPlay = oConfig.bAutoPlay;
    oThis.nDelay = oConfig.nDelay;
    oThis.aItemSize = oConfig.aItemSize;
    if (oThis.aItemSize[0] == 0 || oThis.aItemSize[1] == 0) {
      oThis.aItemSize = [parseInt($(oThis.aItems[0]).outerWidth()), parseInt($(oThis.aItems[0]).outerHeight())];
    }
    oThis.aSize = [oThis.aItemSize[0] * oThis.nCount, oThis.aItemSize[1] * oThis.nCount];
    oThis.aCurrentPos = [(oThis.nCurrent - 1) * oThis.nStep * oThis.aItemSize[0], (oThis.nCurrent - 1) * oThis.nStep * oThis.aItemSize[1]];
    oThis.sDirection = oConfig.sDirection;
    if (oThis.sDirection == 'h') {
      oThis.oContainer.css({'width' : oThis.aSize[0], left : -oThis.aCurrentPos[0]});
    } else if (oThis.sDirection == 'v') {
      oThis.oContainer.css({'height' : oThis.aSize[1], top : -oThis.aCurrentPos[1]});
    }
    //console.log('init: ', oThis.nCurrent + ' - ' + oThis.aCurrentPos);
    if (oThis.nCurrent <= oConfig.nStep) {
      oThis.oButtonPrev.addClass('disable');
    }
    if (oThis.nCurrent >= oConfig.nCount) {
      oThis.oButtonNext.addClass('disable');
    }
    oThis.bIsLocked = false;    

    if (oThis.oButtonPrev.length > 0) {
      oThis.oButtonPrev.bind('click', function(oEvent) {
        oThis.fButtonPrevClick();
      });
    }

    if (oThis.oButtonNext.length > 0) {
      oThis.oButtonNext.bind('click', function(oEvent) {
        oThis.fButtonNextClick();
      });
    }

    if (oThis.bAutoPlay) {
      //console.log('auto play...');
      oThis.oContainer.append(oThis.aItems.clone());
      oThis.aSize = [oThis.aItemSize[0] * oThis.nCount * 2, oThis.aItemSize[1] * oThis.nCount * 2];
      oThis.aCurrentPos = [(oThis.nCurrent - 1) * oThis.nStep * oThis.aItemSize[0], (oThis.nCurrent - 1) * oThis.nStep * oThis.aItemSize[1]];
      //console.log(oThis.sDirection);
      if (oThis.sDirection == 'h') {
        oThis.oContainer.css({'width' : oThis.aSize[0], left : -oThis.aCurrentPos[0]});
      } else if (oThis.sDirection == 'v') {
        oThis.oContainer.css({'height' : oThis.aSize[1], top : -oThis.aCurrentPos[1]});
      }

      var timer = setInterval(function() {
        //console.log(oThis.nCurrent);
        if (oThis.sDirection == 'h') {
          oThis.oContainer.animate({
            left : '-=' + oThis.aItemSize[0]
          }, 500, function() {
            oThis.nCurrent++;
            //if (oThis.nCurrent == oThis.nCount) {
            if (oThis.nCurrent > oThis.nCount) {
              oThis.nCurrent = 1;
              oThis.oContainer.css({left : 0});
            }
          });
        } else if (oThis.sDirection == 'v') {
          oThis.oContainer.animate({
            top : '-=' + oThis.aItemSize[1]
          }, 500, function() {
            oThis.nCurrent++;
            //if (oThis.nCurrent == oThis.nCount) {
            if (oThis.nCurrent > oThis.nCount) {
              oThis.nCurrent = 1;
              oThis.oContainer.css({top : 0});
            }
          });
        }
      }, oThis.nDelay);
    }
  };

  oThis.fButtonPrevClick = function() {
    if (oThis.nCurrent > 1) {
      oThis.fMove(-oThis.nStep);
    }
  };

  oThis.fButtonNextClick = function() {
    //console.log('nCount', oThis.nCount);
    if (oThis.nCurrent < oThis.nCount - oThis.nStep) {
      oThis.fMove(oThis.nStep);
    }
  };

  oThis.fMove = function(nStep) {
    //console.log(nStep);
    if (!oThis.bIsLocked) {
      oThis.bIsLocked = true;
      oThis.oContainer.animate({
        left : '-=' + (nStep * oThis.aItemSize[0])
      }, 500, function() {
        //console.log(oThis.nCurrent);
        oThis.nCurrent += nStep;
        oThis.bIsLocked = false;
        //console.log('cCurrent', oThis.nCurrent);
        if (oThis.nCurrent <= oThis.nStep) {
          oThis.oButtonPrev.addClass('disable');
        } else if (oThis.nCurrent >= oThis.nCount) {
          oThis.oButtonNext.addClass('disable');
        } else {
          oThis.oButtonPrev.removeClass('disable');
          oThis.oButtonNext.removeClass('disable');
        }
      });
    }
  };
};
