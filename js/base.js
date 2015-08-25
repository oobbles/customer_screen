
var ie_version = function() {
	// ----------------------------------------------------------
	// A short snippet for detecting versions of IE in JavaScript
	// without resorting to user-agent sniffing.
	// Credit: James Padolsey
	// Link: https://gist.github.com/padolsey/527683
	// ----------------------------------------------------------
	var undef,
		v = 3,
		div = document.createElement('div'),
		all = div.getElementsByTagName('i');
	while (
		div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
		all[0]
	);
	return v > 4 ? v : undef;
}();

var isMobileDevice = (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i)
	.test(navigator.userAgent);

var FlakesFrame = {
	init: function() {
		// DOM element map
		this.el = {
			body: $('body'),
			navigation_expand_target: $('.flakes-mobile-top-bar .navigation-expand-target'),
			flakes_frame: {
				container: $('.flakes-frame'),
				navigation: $('.flakes-frame .flakes-navigation'),
				content: $('.flakes-frame .flakes-content')
			}
		};
		this.events();
	},
	equalizeHeights: function() {
		var tallestColumn = Math.max(
			this.el.flakes_frame.navigation.outerHeight(),
			this.el.flakes_frame.content.outerHeight()
		);

		this.el.flakes_frame.navigation.outerHeight(tallestColumn);
		this.el.flakes_frame.content.outerHeight(tallestColumn);
	},
	dumbSnappingFallback: function() {
		var that = this;
		this.el.navigation_expand_target.click(function() {
			that.el.flakes_frame.navigation.css({
				'z-index': '10'
			}).show();
			return false;
		});

		this.el.flakes_frame.content.click(function() {
			that.el.flakes_frame.navigation.hide();
		});
	},
	setupSnapping: function() {
		if (ie_version && ie_version <= 9) {
			this.dumbSnappingFallback();
		}

		var snapper = new Snap({
			element: this.el.flakes_frame.content[0],
			disable: 'right',
			maxPosition: 250,
			minPosition: -250
		});

		if (!isMobileDevice) {
			this.el.body.attr('data-snap-ignore', 'true');
		}

		this.el.navigation_expand_target.click(function() {
			if (snapper.state().state == "left") {
				snapper.close();
			} else {
				snapper.open('left');
			}
			return false;
		});

		this.snapper = snapper;
	},


	events: function() {
		this.equalizeHeights();
		this.setupSnapping();
	}
};
 //MY JS
 if (!isMobileDevice) {
 document.getElementById("baby").style.height = document.getElementById("mama").offsetHeight+"px";
}
function init() {

  var tabListItems = document.getElementById('tabs').childNodes;
  for ( var i = 0; i < tabListItems.length; i++){
    if ( tabListItems[i].nodeName == "LI"){
      var tabLink = getFirstChildWithTagName( tabListItems[i], 'A' );
      var id = getHash( tabLink.getAttribute('href') );
      tabLinks[id] = tabLink;
      contentDivs[id] = document.getElementById( id );
    }
  }

  var i = 0;

  for ( var id in tabLinks ) {
    tabLinks[id].onclick = showTab;
    tabLinks[id].onfocus = function() { this.blur() };
    if ( i == 0 ) tabLinks[id].className = 'selected';
    i++;
  }

  var i = 0;

  for ( var id in contentDivs ) {
    if ( i != 0 ) contentDivs[id].className = 'tabContent hide';
    i++;

  }
}

function showTab() {
  var selectedId = getHash( this.getAttribute('href') );

  for ( var id in contentDivs ) {
    if ( id == selectedId ) {
      tabLinks[id].className = 'selected';
      contentDivs[id].className = 'tabContent';
    } else {
      tabLinks[id].className = '';
      contentDivs[id].className = 'tabContent hide';
    }
  }

  return false;
}

function getFirstChildWithTagName( element, tagName ) {
  for ( var i = 0; i < element.childNodes.length; i++ ) {
    if ( element.childNodes[i].nodeName == tagName ) return element.childNodes[i];
  }
}

function getHash( url ) {
  var hashPos = url.lastIndexOf ( '#' );
  return url.substring( hashPos + 1 );
}


var tabLinks = new Array();

var contentDivs = new Array();
// Initialize modules when DOM is ready
jQuery(function() {
	FlakesFrame.init();
});
