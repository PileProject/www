!function(t,e,i){var n=function(n,s){this.elem=n,this.$elem=t(n),this.options=s,this.metadata=this.$elem.data("plugin-options"),this.$nav=this.$elem.find("a"),this.$win=t(e),this.sections={},this.didScroll=!1,this.$doc=t(i),this.docHeight=this.$doc.height()};n.prototype={defaults:{currentClass:"active",changeHash:!1,easing:"swing",filter:"",scrollSpeed:750,scrollOffset:0,scrollThreshold:.5,begin:!1,end:!1,scrollChange:!1},init:function(){var e=this;return e.config=t.extend({},e.defaults,e.options,e.metadata),""!==e.config.filter&&(e.$nav=e.$nav.filter(e.config.filter)),e.$nav.on("click.onePageNav",t.proxy(e.handleClick,e)),e.getPositions(),e.bindInterval(),e.$win.on("resize.onePageNav",t.proxy(e.getPositions,e)),this},adjustNav:function(t,e){t.$elem.find("."+t.config.currentClass).removeClass(t.config.currentClass),e.addClass(t.config.currentClass)},bindInterval:function(){var t,e=this;e.$win.on("scroll.onePageNav",function(){e.didScroll=!0}),e.t=setInterval(function(){t=e.$doc.height(),e.didScroll&&(e.didScroll=!1,e.scrollChange()),t!==e.docHeight&&(e.docHeight=t,e.getPositions())},250)},getHash:function(t){return t.attr("href").split("#")[1]},getPositions:function(){var e,i,n,s=this;s.$nav.each(function(){e=s.getHash(t(this)),n=t("#"+e),n.length&&(i=n.offset().top,s.sections[e]=Math.round(i)-s.config.scrollOffset)})},getSection:function(t){var e=null,i=Math.round(this.$win.height()*this.config.scrollThreshold);for(var n in this.sections)this.sections[n]-i<t&&(e=n);return e},handleClick:function(i){var n=this,s=t(i.currentTarget),o=s.parent(),r="#"+n.getHash(s);o.hasClass(n.config.currentClass)||(n.config.begin&&n.config.begin(),n.adjustNav(n,o),n.unbindInterval(),t.scrollTo(r,n.config.scrollSpeed,{axis:"y",easing:n.config.easing,offset:{top:-n.config.scrollOffset},onAfter:function(){n.config.changeHash&&(e.location.hash=r),n.bindInterval(),n.config.end&&n.config.end()}})),i.preventDefault()},scrollChange:function(){var t,e=this.$win.scrollTop(),i=this.getSection(e);null!==i&&(t=this.$elem.find('a[href$="#'+i+'"]').parent(),t.hasClass(this.config.currentClass)||(this.adjustNav(this,t),this.config.scrollChange&&this.config.scrollChange(t)))},unbindInterval:function(){clearInterval(this.t),this.$win.unbind("scroll.onePageNav")}},n.defaults=n.prototype.defaults,t.fn.onePageNav=function(t){return this.each(function(){new n(this,t).init()})}}(jQuery,window,document);