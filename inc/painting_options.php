<?php

if(class_exists('CSF')){
  $prefix = 'painting_options';
  // Main Options
  CSF::createOptions($prefix, array(
    'menu_title' => __('Theme Options', 'painting'),
    'menu_slug' => 'painting_options',
    'framework_title' =>__('Painting Options <small>Nitu Barmon</small>', 'painting'),
    'menu_parent' => 'themes.php',
    'menu_type' => 'submenu',
  ));
  // Header Section
  CSF::createSection($prefix, array(
    'id' => 'header_options',
    'title' =>__('Header Options', 'painting'),
  ));
  
  // Header Sub Section
  CSF::createSection($prefix, array(
    'parent' => 'header_options',
    'title' => __('Top Header', 'painting'),
    'fields' => array(
      array(
        'id' => 'phone_icon',
        'type' => 'icon',
        'title' => __('Phone Icon', 'painting'),
      ),
      array(
        'id' => 'phone_number',
        'type' => 'text',
        'title' => __('Phone Number', 'painting'),
        'desc' => __('Write Your Phone Number', 'painting'),
        'default' => '+012 345 6789',
      ),
      array(
        'id' => 'email_icon',
        'type' => 'icon',
        'title' => __('Email Icon', 'painting'),
      ),
      array(
        'id' => 'p_email',
        'type' => 'text',
        'title' => __('Email', 'painting'),
        'desc' => __('Write Your Email', 'painting'),
        'default' => 'info@example.com',
      ),
      array(
        'id' => 'top_icon',
        'type' => 'group',
        'title' => __('Top Social Icons', 'painting'),
        'fields' => array(
          array(
            'id' => 'social_icon',
            'title' => __('Social Icon'),
            'type' => 'icon',
          ),
          array(
            'id' => 'social_icon_link',
            'title' => __('Social ILink'),
            'type' => 'text',
            'desc' => __('Put Your Social Link Here', 'painting'),
            'default' => 'https://www.upwork.com/freelancers',
          ),
        )
      )
    )
  ));
  
   // Header Sub Section
   CSF::createSection($prefix, array(
    'parent' => 'header_options',
    'title' => __('Header Logo', 'painting'),
    'fields' => array(
      array(
        'id' => 'header_logo',
        'type' => 'media',
        'title' => __('Header Logo', 'painting'),
        'desc' => __('Upload Your Logo Here', 'painting'),
      ),
    )
  ));

  // Hero Section
  CSF::createSection($prefix, array(
    'id' => 'hero_options',
    'title' =>__('Hero Options', 'painting'),
  ));
  
  // Hero Sub Section
  CSF::createSection($prefix, array(
    'parent' => 'hero_options',
    'title' =>__('Hero Option', 'painting'),
    'fields' => array(
      array(
        'id' => 'hero_bg',
        'title' => __('Hero Background Img', 'painting'),
        'type' => 'background',
        'desc' => __('Upload Your Hero Area Background Image Here', 'painting'),
        'output' => array('.bg-hero'),
      ),
      array(
        'id' => 'hero_title',
        'title' => __('Hero Title', 'painting'),
        'type' => 'text',
        'desc' => __('Write Your Hero Section Title Here', 'painting'),
        'default' => 'We Bring Your Home To Lively Colors',
      ),
      array(
        'id' => 'hero_desc',
        'title' => __('Hero Description', 'painting'),
        'type' => 'textarea',
        'desc' => __('Write Your Hero Section Description Here', 'painting'),
        'default' => 'Nonumy diam dolores est ipsum diam amet lorem clita clit',
      ),
      array(
        'id' => 'quote_btn',
        'title' => __('Quote Button Text', 'painting'),
        'type' => 'text',
        'desc' => __('Write Your Quote Button Text Here', 'painting'),
        'default' => 'Get A Quote',
      ),
      array(
        'id' => 'contact_btn',
        'title' => __('Contact Button Text', 'painting'),
        'type' => 'text',
        'desc' => __('Write Your Contact Button Text Here', 'painting'),
        'default' => 'Contact Us',
      ),
    )
  ));
  
  // Welcome Section
  CSF::createSection($prefix, array(
    'id' => 'wlc_options',
    'title' =>__('Welcome Options', 'painting'),
  ));
  // Welcome Sub Section
  CSF::createSection($prefix, array(
    'parent' => 'wlc_options',
    'title' =>__('Welcome & Choose Option', 'painting'),
    'fields' => array(
      array(
        'id' => 'wlc_ch_bg',
        'title' => __('Welcome & Choose Background Img', 'painting'),
        'type' => 'background',
        'desc' => __('Upload Your Image Here', 'painting'),
        'output' => array('.about-start, .about-end'),
      ),  
    )
    ));
    
  // Welcome Sub Section
  CSF::createSection($prefix, array(
    'parent' => 'wlc_options',
    'title' =>__('Welcome Option', 'painting'),
    'fields' => array(
      array(
        'id' => 'wlc_title',
        'title' => __('Welcome Title', 'painting'),
        'type' => 'text',
        'desc' => __('Write Your Welcome Title Here', 'painting'),
        'default' => 'Welcome To Painter',
      ), 
      array(
        'id' => 'wlc_desc',
        'title' => __('Welcome Description', 'painting'),
        'type' => 'textarea',
        'desc' => __('Write Your Welcome Description Here', 'painting'),
        'default' => 'Clita erat ipsum et lorem et sit, sed stet no labore',
      ),
      array(
        'id' => 'wlc_btn',
        'title' => __('Welcome Button Text', 'painting'),
        'type' => 'text',
        'desc' => __('Write Your Welcome Button Text Here', 'painting'),
        'default' => 'Contact Us',
      ),
      array(
        'id' => 'wlc_fimg',
        'title' => __('Welcome Image', 'painting'),
        'type' => 'media',
        'desc' => __('Upload Your Image', 'painting'),
      ),
    )
  ));
  // Welcome Sub Section
  CSF::createSection($prefix, array(
      'parent' => 'wlc_options',
      'title' =>__('Choose Option', 'painting'),
      'fields' => array(
        array(
          'id' => 'ch_title',
          'title' => __('Choose Title', 'painting'),
          'type' => 'text',
          'desc' => __('Write Your Choose Title Here', 'painting'),
          'default' => 'Why Choose Us?',
        ), 
        array(
          'id' => 'ch_desc',
          'title' => __('Choose Description', 'painting'),
          'type' => 'textarea',
          'desc' => __('Write Your Choose Description Here', 'painting'),
          'default' => 'Tempor erat elitr at rebum at at clita. Diam dolor',
        ),
        array(
          'id' => 'ch_btn',
          'title' => __('Choose Button Text', 'painting'),
          'type' => 'text',
          'desc' => __('Write Your Choose Button Text Here', 'painting'),
          'default' => 'Get A Quote',
        ),
        array(
          'id' => 'ch_fimg',
          'title' => __('Choose Image', 'painting'),
          'type' => 'media',
          'desc' => __('Upload Your Image', 'painting'),
        ),
      )
  ));
    
  // Quata Section
  CSF::createSection($prefix, array(
    'id' => 'quata_options',
    'title' =>__('Quata Options', 'painting'),
  ));
   
  // Quata Section
  CSF::createSection($prefix, array(
    'parent' => 'quata_options',
    'title' =>__('Quata Bg', 'painting'),
    'fields' => array(
      array(
        'id' => 'quata_bg',
        'title' => __('Quata Background Image', 'painting'),
        'type' => 'background',
        'desc' => __('Upload Your Quata Background Image Here', 'painting'),
        'output' => array('.bg-quote'),
      ),
    )
  ));
    
  // Testimonials Section
  CSF::createSection($prefix, array(
    'id' => 'testimonials_options',
    'title' =>__('Testimonial Options', 'painting'),
  )); 
    
  // Testimonials Bg Section
  CSF::createSection($prefix, array(
    'parent' => 'testimonials_options',
    'title' =>__('Testimonial Background Image', 'painting'),
    'fields' => array(
      array(
        'id' => 'testi_bg',
        'title' => __('Background Image', 'painting'),
        'type' => 'background',
        'desc' =>__('Upload Your Image', 'painting'),
        'output' => array('.bg-testimonial')
      ),
    )
  )); 
  
  // Call Action Section
  CSF::createSection($prefix, array(
    'id' => 'call_options',
    'title' =>__('Call Action Options', 'painting'),
  ));  
  
  // Call Action Sub Section
  CSF::createSection($prefix, array(
    'parent' => 'call_options',
    'title' =>__('Call Action Info', 'painting'),
    'fields' => array(
      array(
        'id' => 'call_title',
        'type' => 'text',
        'title' =>__('Call Action Title', 'painting'),
        'desc' =>__('Write Your Call Action Title Here', 'painting'),
        'default' => 'Do You Have Any Project?',
      ),
      array(
        'id' => 'call_desc',
        'type' => 'textarea',
        'title' =>__('Call Action Description', 'painting'),
        'desc' =>__('Write Your Call Action Description Here', 'painting'),
        'default' => 'ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam',
      ),
      array(
        'id' => 'call_btn',
        'type' => 'text',
        'title' =>__('Button Text', 'painting'),
        'desc' =>__('Write Your Button Here', 'painting'),
        'default' => 'Contact Us',
      ),
      array(
        'id' => 'call_bg',
        'type' => 'background',
        'title' =>__('Background Image', 'painting'),
        'output' => array('.bg-call-to-action'),
      ),
    )
  ));  
   
  // Contact Section
  CSF::createSection($prefix, array(
    'id' => 'contact_options',
    'title' =>__('Contact Options', 'painting'),
  ));
   
  // Contact Sub Section
  CSF::createSection($prefix, array(
    'parent' => 'contact_options',
    'title' =>__('Contact Option', 'painting'),
    'fields' => array(
      array(
        'id' => 'contact_heading',
        'title' => __('Heading', 'painting'),
        'type' => 'text',
        'desc' => __('Write Your Contact Heading Text Here', 'painting'),
        'default' => 'Please Feel Free To Contact Us',
      ),
      array(
        'id' => 'contact_addres',
        'title' => __('Address', 'painting'),
        'type' => 'text',
        'desc' => __('Write Your Address Here', 'painting'),
        'default' => '123 Street, New York, USA',
      ),
      array(
        'id' => 'contact_phone',
        'title' => __('Phone Number', 'painting'),
        'type' => 'text',
        'desc' => __('Write Your Phone Number Here', 'painting'),
        'default' => '+012 345 6789',
      ),
      array(
        'id' => 'contact_email',
        'title' => __('Email', 'painting'),
        'type' => 'text',
        'desc' => __('Write Your Email Here', 'painting'),
        'default' => 'info@example.com',
      ),
      array(
        'id' => 'contact_map',
        'title' => __('Map', 'painting'),
        'type' => 'map',
        'desc' => __('Add Your Map Here', 'painting'),
      ),
    )
  ));

  
}