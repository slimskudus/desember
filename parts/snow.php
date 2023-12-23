    <script src="<?php echo assets('js/jquery.snow.js'); ?>"></script>
    <script>
    var snowEffectInterval = jQuery.fn.snow({
      // min size of element (default: 20)
      minSize: 20,
      
      // max size of element (default: 50)
      maxSize: 50,
      
      // flake fall time multiplier (default: 20)
      fallTimeMultiplier: 20, 
      
      // flake fall time difference (default: 10000)
      fallTimeDifference: 10000, 
      
      // interval (miliseconds) between new element spawns (default: 500)
      spawnInterval: 100, 
      
      // jQuery element to apply snow effect on (should work on any block element) (default: body)
      target: jQuery("body"),
      
      //elements to use in generating snow effect
      elements  : [
      
        // Element #1
        { 
          // html element to be spawned for this element
          html: '<i class="fa fa-snowflake-o" aria-hidden="true"></i>',
          // hex color for this element - works only for font based icons
          color: '#ffffff'
        },
        
        // Element #2
        { 
          // html element to be spawned for this element
          html: '<i class="fa fa-bell" aria-hidden="true"></i>',
          // hex color for this element - works only for font based icons
          color: '#024808'
        },
        
        // Element #3
        { 
          // html element to be spawned for this element
          html: '<i class="fa fa-snowflake" aria-hidden="true"></i>',
          // hex color for this element - works only for font based icons
          color: '#ffffff'
        },
        
        // Element #4
        {
          // html element to be spawned for this element
          html: '<i class="fa fa-music" aria-hidden="true"></i>',
          // hex color for this element - works only for font based icons
          color: '#cc2037'
        },
        
        // Element #5
        { 
          // html element to be spawned for this element
          html: '<i class="fa fa-snowflake" aria-hidden="true"></i>',
          // hex color for this element - works only for font based icons
          color: '#ffffff'
        },
      ]
    });
    </script>