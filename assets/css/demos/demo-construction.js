(function($){'use strict';if($.isFunction($.fn.nivoSlider)){$('#nivoSlider').nivoSlider({effect:'random',slices:15,boxCols:8,boxRows:4,animSpeed:500,pauseTime:3000,startSlide:0,directionNav:!0,controlNav:!0,controlNavThumbs:!1,pauseOnHover:!0,manualAdvance:!1,prevText:'Prev',nextText:'Next',randomStart:!1,beforeChange:function(){},afterChange:function(){},slideshowEnd:function(){},lastSlide:function(){},afterLoad:function(){}})}
var $thumbGalleryDetail1=$('#thumbGalleryDetail'),$thumbGalleryThumbs1=$('#thumbGalleryThumbs'),flag=!1,duration=300;$thumbGalleryDetail1
.owlCarousel({items:1,margin:10,nav:!0,dots:!1,loop:!1,navText:[],rtl:(($('html[dir="rtl"]').get(0))?!0:!1)}).on('changed.owl.carousel',function(e){if(!flag){flag=!0;$thumbGalleryThumbs1.trigger('to.owl.carousel',[e.item.index-1,duration,!0]);flag=!1}});$thumbGalleryThumbs1
.owlCarousel({margin:15,items:4,nav:!1,center:!1,dots:!1,rtl:(($('html[dir="rtl"]').get(0))?!0:!1)}).on('click','.owl-item',function(){$thumbGalleryDetail1.trigger('to.owl.carousel',[$(this).index(),duration,!0])}).on('changed.owl.carousel',function(e){if(!flag){flag=!0;$thumbGalleryDetail1.trigger('to.owl.carousel',[e.item.index,duration,!0]);flag=!1}})}).apply(this,[jQuery]);