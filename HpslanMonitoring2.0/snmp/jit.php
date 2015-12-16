
<script language="javascript" type="text/javascript" >
        var labelType, useGradients, nativeTextSupport, animate;
//////////////////////////////AJAX1
  $.ajax
   ({
	 type: "POST",
     url: "alerts/traps.php",
     data: {},

   success: function(response) { $("#notif").html(response);  }
                                  
           });
//////////////////////////////////FIN AJAX1

(function() {
  var ua = navigator.userAgent,
      iStuff = ua.match(/iPhone/i) || ua.match(/iPad/i),
      typeOfCanvas = typeof HTMLCanvasElement,
      nativeCanvasSupport = (typeOfCanvas == 'object' || typeOfCanvas == 'function'),
      textSupport = nativeCanvasSupport 
        && (typeof document.createElement('canvas').getContext('2d').fillText == 'function');
  //I'm setting this based on the fact that ExCanvas provides text support for IE
   labelType = (!nativeCanvasSupport || (textSupport && !iStuff))? 'Native' : 'HTML';
  nativeTextSupport = labelType == 'Native';
  useGradients = nativeCanvasSupport;
  animate = !(iStuff || !nativeCanvasSupport);
})();

var Log = {
  elem: false,
  write: function(text){
    if (!this.elem) 
      this.elem = document.getElementById('log');
    this.elem.innerHTML = text;
    this.elem.style.left = (500 - this.elem.offsetWidth / 2) + 'px';
  }
};
function init(){
	
	function loadImages(){
    fd.graph.eachNode( function(node){
        if( node.getData('type') == 'image' ){
            var img = new Image();
            img.addEventListener('load', function(){
                node.setData('image',img);
                // store this image object in node
            }, false);
            img.src=node.getData('url');
        }

        
    });
}

  // init data
  var json = <?php echo $txt11;?>;  
  var fd = new $jit.ForceDirected({
    //id of the visualization container
    injectInto: 'infovis',
    //Enable zooming and panning
    //with scrolling and DnD
    Navigation: {
      enable: true,
      type: 'Native',
      //Enable panning events only if we're dragging the empty
      //canvas (and not a node).
      panning: 'avoid nodes',
      zooming: 10 //zoom speed. higher is more sensible
    },
    // JSON structure.
    Node: {
      overridable: true,
      dim: 27,
	  
    },
    Edge: {
      overridable: true,
      color: '#23A4FF',
      lineWidth: 0.4
    },
	
	Tips: {
      enable: false,
      onShow: function(tip, node) {	 
//////////////////////////////////////////////AJAX2	  
		
/////////////////////////////////////////////////FIN AJAX2		  
        //count connections
        var count = 0;
        node.eachAdjacency(function() { count++; });
		if(node.getData('type')=='image'){
        //display node info in tooltip
        tip.innerHTML = "<div class=\"tip-title\">"+"<img src=\"images/ciscologo.png\" height=\"42px\" width=\"55px\">" + node.getData('desc') + "</div>"
          + "<div class=\"tip-text\">" + "</div>"
		  /**+ "<div id=\"id\" class=\"tip-text\">" + "interfacesf0/0=" + node.getData('interfacef0') +"</div>"
          + "<div class=\"tip-text\">" + "interfacesf0/1=" + "</div>"
          + "<div class=\"tip-text\">" + "interfacesf1/1=" + "</div>"
	      + "<div class=\"tip-text\">" + "interfacesf2/0=" + node.getData('interfacef1') +"</div>"
          + "<div class=\"tip-text\">" + "interfaces" + "</div>"
          + "<div class=\"tip-text\">" + "interfaces" + "</div>"**/
		  +"<div id=\"resultat1\">"+"</div>"
        ;
		}else{}
		
		var val = ' <div>val</div>';
		
      }
    },
	    // Add node events
    Events: {
      enable: true,
	  onClick: function(node, eventInfo, e) {
		 
                                              },
	  
      type: 'Native',
      //Change cursor style when hovering a node
      onMouseEnter: function() {
		 
		    if(node.getData('type')=='image'){
        fd.canvas.getElement().style.cursor = 'move';
		  }else{fd.canvas.getElement().style.cursor = '';}
		   $jit.util.event.stop(e); //stop default touchmove event
        this.onDragMove(node, eventInfo, e);
		
      },
      onMouseLeave: function() {
        fd.canvas.getElement().style.cursor = '';
      },
	  
      //Update node positions when dragged
      onDragMove: function(node, eventInfo, e) {
        var pos = eventInfo.getPos();
        node.pos.setc(pos.x, pos.y);
        fd.plot();
      },
      //Implement the same handler for touchscreens
      onTouchMove: function(node, eventInfo, e) {
       
      }
    },
	
    //Number of iterations for the FD algorithm
    iterations: 200,
    //Edge length
    levelDistance: 130,
    // This method is only triggered
    // on label creation and only for DOM labels (not native canvas ones).
    onCreateLabel: function(domElement, node){
      // Create a 'name' and 'close' buttons and add them
      // to the main node label
      var nameContainer = document.createElement('span'),
          closeButton = document.createElement('span'),
          style = nameContainer.style;
      nameContainer.className = 'name';
      nameContainer.innerHTML = node.name;
      
      domElement.appendChild(nameContainer);
      domElement.appendChild(closeButton);
      style.fontSize = "0.8em";
	  if(node.getData('type')=='image'){
      style.color = "#000";
	  }else{style.color = "transparent";}
      //Fade the node and its connections when
      //clicking the close button
      closeButton.onclick = function() {
        node.setData('alpha', 0, 'end');
        node.eachAdjacency(function(adj) {
          adj.setData('alpha', 0, 'end');
        });
        fd.fx.animate({
          modes: ['node-property:alpha',
                  'edge-property:alpha'],
          duration: 500
        });
      };
      //Toggle a node selection when clicking
      //its name. This is done by animating some
      //node styles like its dimension and the color
      //and lineWidth of its adjacencies.
      nameContainer.onclick = function() {
		  
		  
		    $.ajax({
	               type: "GET",
                   url: "switchinterface.php",
                   data: {login : node.name ,password : 'pass', nbrport : node.getData('nbrport'),1:node.getData('1'),2:node.getData('2'),3:node.getData('3'),4:node.getData('4'),5:node.getData('5'),6:node.getData('6'),7:node.getData('7'),8:node.getData('8'),9:node.getData('9'),10:node.getData('10'),11:node.getData('11'),12:node.getData('12'),13:node.getData('13'),14:node.getData('14'),15:node.getData('15'),16:node.getData('16'),17:node.getData('17'),18:node.getData('18'),19:node.getData('19'),20:node.getData('20'),21:node.getData('21'),22:node.getData('22'),23:node.getData('23'),24:node.getData('24'),25:node.getData('25'),26:node.getData('26'),27:node.getData('27'),28:node.getData('28'),29:node.getData('29'),30:node.getData('30'),31:node.getData('31'),32:node.getData('32'),33:node.getData('33'),34:node.getData('34'),35:node.getData('35'),36:node.getData('36'),37:node.getData('37'),38:node.getData('38'),39:node.getData('39'),40:node.getData('40'),41:node.getData('41'),42:node.getData('42'),43:node.getData('43'),44:node.getData('44'),45:node.getData('45'),46:node.getData('46'),47:node.getData('47'),48:node.getData('48'),49:node.getData('49'),50:node.getData('50'),51:node.getData('51'),52:node.getData('52'),53:node.getData('53'),54:node.getData('54'),55:node.getData('55'),56:node.getData('56'),57:node.getData('57'),58:node.getData('58'),59:node.getData('59'),60:node.getData('60'),61:node.getData('61'),62:node.getData('62'),63:node.getData('63'),64:node.getData('64'),65:node.getData('65'),66:node.getData('66'),67:node.getData('67'),68:node.getData('68'),69:node.getData('69'),70:node.getData('70'),71:node.getData('71'),72:node.getData('72'),73:node.getData('73'),74:node.getData('74'),75:node.getData('75'),76:node.getData('76'),77:node.getData('77'),78:node.getData('78'),79:node.getData('79'),80:node.getData('80'),81:node.getData('81'),82:node.getData('82'),83:node.getData('83'),84:node.getData('84'),85:node.getData('85'),86:node.getData('86'),87:node.getData('87'),88:node.getData('88'),89:node.getData('89'),90:node.getData('90'),91:node.getData('91'),92:node.getData('92'),93:node.getData('93'),94:node.getData('94'),95:node.getData('95'),96:node.getData('96'),97:node.getData('97'),98:node.getData('98'),99:node.getData('99'),100:node.getData('100'),101:node.getData('101'),102:node.getData('102'),103:node.getData('103'),104:node.getData('104'),105:node.getData('105'),106:node.getData('106'),107:node.getData('107'),108:node.getData('108'),109:node.getData('109'),110:node.getData('110'),111:node.getData('111'),112:node.getData('112'),113:node.getData('113'),114:node.getData('114'),115:node.getData('115'),116:node.getData('116'),117:node.getData('117'),118:node.getData('118'),119:node.getData('119'),120:node.getData('120'),121:node.getData('121'),122:node.getData('122'),123:node.getData('123'),124:node.getData('124'),125:node.getData('125'),126:node.getData('126'),127:node.getData('127'),128:node.getData('128'),129:node.getData('129')

				   
				   },
                   success: function(response) { $("#resultat1").html(response);}
                 });
		  
		  
		  var dialog, form,
 
     
      emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
      name = $( "#name" ),
      email = $( "#email" ),
      password = $( "#password" ),
      allFields = $( [] ).add( name ).add( email ).add( password ),
      tips = $( ".validateTips" );
 
    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
 
    function checkLength( o, n, min, max ) {
      if ( o.val().length > max || o.val().length < min ) {
        o.addClass( "ui-state-error" );
        updateTips( "Length of " + n + " must be between " +
          min + " and " + max + "." );
        return false;
      } else {
        return true;
      }
    }
 
    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }
 
    function addUser() {
      var valid = true;
      allFields.removeClass( "ui-state-error" );
 
      valid = valid && checkLength( name, "username", 3, 16 );
      valid = valid && checkLength( email, "email", 6, 80 );
      valid = valid && checkLength( password, "password", 5, 16 );
 
      valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );
      valid = valid && checkRegexp( email, emailRegex, "eg. ui@jquery.com" );
      valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );
 
      if ( valid ) {
        $( "#users tbody" ).append( "<tr>" +
          "<td>" + name.val() + "</td>" +
          "<td>" + email.val() + "</td>" +
          "<td>" + password.val() + "</td>" +
        "</tr>" );
        dialog.dialog( "close" );
      }
      return valid;
    }
 
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 470,
      width: 930,
      modal: true,
      buttons: {
       
      },
      close: function() {
        //form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addUser();
    });
 
  
      dialog.dialog( "open" );
		  
		  
		 // alert('OKOK');
        //set final styles
        fd.graph.eachNode(function(n) {
          if(n.id != node.id) delete n.selected;
          n.setData('dim', 7, 'end');
          n.eachAdjacency(function(adj) {
            adj.setDataset('end', {
              lineWidth: 0.4,
              color: '#23a4ff'
            });
          });
        });
        if(!node.selected) {
          node.selected = true;
          node.setData('dim', 17, 'end');
          node.eachAdjacency(function(adj) {
			  
			  if(node.getData('type')){
            adj.setDataset('end', {
              lineWidth: 3,
              color: '#36acfb'
		  });}
          });
        } else {
          delete node.selected;
        }
        //trigger animation to final styles
        fd.fx.animate({
          modes: ['node-property:dim',
                  'edge-property:lineWidth:color'],
          duration: 500
        });
        // Build the right column relations list.
        // This is done by traversing the clicked node connections.
        var html = "<h4>" + node.name + "</h4><b> connections:</b><ul><li>",
            list = [];
        node.eachAdjacency(function(adj){
          if(adj.getData('alpha')) list.push(adj.nodeTo.name);
        });
        //append connections information

          
		$jit.id('inner1').innerHTML =   "<div id=\"resultat\">"+
                                           
                                        "</div>"
                               ;
      };
    },
    // Change node styles when DOM labels are placed
    // or moved.
    onPlaceLabel: function(domElement, node){
      var style = domElement.style;
      var left = parseInt(style.left);
      var top = parseInt(style.top);
      var w = domElement.offsetWidth;
      style.left = (left - w / 2) + 'px';
      style.top = (top + 10) + 'px';
      style.display = '';
    }
  });
      // load JSON data.
  fd.loadJSON(json);
    $jit.ForceDirected.Plot.NodeTypes.implement({
'image': { 
         'render': function(node, canvas){
                 var zozor = new Image();
                zozor.src = 'images/switchfed.png';
                var ctx = canvas.getCtx(); 
                var pos = node.pos.getc(true);
                if( node.getData('image') != 0 ){
                var img = zozor;
                img.height=10;
                img.width=180;
                var x="INTEGER: up(1)";
                ctx.drawImage( img, pos.x-20, pos.y-30,100,40);
            
                }
            }, 
            'contains': function(node,pos){ 
                var npos = node.pos.getc(true); 
                dim = node.getData('dim'); 
                return this.nodeHelper.circle.contains(npos, pos, dim); 
            } 
},
 'serveurinfo': 
{
'render': function(node, canvas){ 
    var ctx = canvas.getCtx(); 
    var img = new Image(); 
    img.src='serveurinfo.png'; 
img.height=0;
img.width=30;
    var pos = node.pos.getc(true); 
    img.onload = function() {
        
        ctx.drawImage(img, pos.x-20, pos.y-30,80,80);; // draw image
        
    };
},
               'contains': 
            function(node, pos)
                    { 
                      var npos = node.pos.getc(true), 
                        dim = node.getData('dim'); 
                        return this.nodeHelper.square. contains(npos, pos, dim); 
                    } 
         },
		 'image1': { 
         'render': function(node, canvas){
                 var zozor = new Image();
                zozor.src = 'vert.png';
                var ctx = canvas.getCtx(); 
                var pos = node.pos.getc(true);
                if( node.getData('image') != 0 ){
                var img = zozor;
                img.height=50;
                img.width=50;
		        ctx.drawImage( img, pos.x-20, pos.y-30,80,80);
                   }
            }, 
            'contains': function(node,pos){ 
                var npos = node.pos.getc(true); 
                dim = node.getData('dim'); 
                return this.nodeHelper.circle.contains(npos, pos, dim); 
            } 
}
});

loadImages();
  // compute positions incrementally and animate.
  fd.computeIncremental({
    iter: 40,
    property: 'end',
    onStep: function(perc){
      Log.write(perc + '% loaded...');
    },
    onComplete: function(){
		      Log.write('done');
      fd.animate({
               duration: 2500
      });
    }
  });
   // end
}

</script>


