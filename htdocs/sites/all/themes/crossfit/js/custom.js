$(window).load(function() {
	<!--TWITTER-->
        $(".tweet").tweet({
          join_text: "auto",
          username: "html5awesome",
          avatar_size: 48,
          count: 3,
          auto_join_text_default: " we said, ",
          auto_join_text_ed: " we ",
          auto_join_text_ing: " we were ",
          auto_join_text_reply: " we replied ",
          auto_join_text_url: " we were checking out ",
          loading_text: "loading tweets..."
        });
	//------Qouvolver-------------	
	$('.feed').quovolver();	
	
	//------IMAGE HOVER-------------
	jQuery('ul.da-thumbs > li, div.da-thumbs div, li.da-thumbs div').hoverdir();

	//------TIPSY TOOLTIP-------------
	$('a.tip').tipsy({fade: true, gravity: 's'});
	
	//------MENU-------------
	ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
	});
	
	
	//------SELECTED MENU IPAD, IPHONE-------------
      $("<select />").appendTo("nav");
      
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Go to..."
      }).appendTo("nav select");
      
      $("nav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
	   
      });

      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
	 
	 //------PRETTY PHOTO------------- 
	$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
	 
	 	 //------CAMERA SLIDER-------------
		jQuery('#camera_wrap_1').camera({
			thumbnails: false,
			height: '47%',
			navigationHover: false,
			pagination: false,
			loader: false
		});	
});