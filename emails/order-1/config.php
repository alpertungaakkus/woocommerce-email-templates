<?php

return array(
    'appearance' => array(
        'backgroundImage' => array(
            'default'=> 'images/bag-bg.png',
            'type' => 'image',
        ),
        
        'backgroundColor' => array(
            'default' => '#3d3e3e',
            'type' => 'color'
        ),
        'baseFont' => array(
            'default' => 'Raleway',
            'type' => 'fontSelector'
        ) 
    ),
    'header' => array(
        'backgroundColor' => array(
            'type' => 'color',
            'default' => '#303030'
        ),
        'logo' => array(
            'default' => 'images/OrderMail.png',
            'type' => 'image'
        ),
        'menu' => array(
            'type' => 'menu',
            'default' => array(
                'HOME',
                'SHIPING',
                'CONTACT'
            ),
        ),
        'headerFont' => array(
            'type' => 'fontSelector',
            'default' => 'Akronim'
        ),
        
    ),
    'body' => array(
        'orderHeadingText' => array(
            'type' => 'text',
            'default' => 'Please find details of your order <b style="color:#303030; font-weight: 800;font-style: normal;">ORD935200001</b> below:',
            'mutipleEmails' => true
        ),
        'orderHeadingTitle' => array(
            'type' => 'textInput',
            'default' => 'Dear John Doe,',
            'mutipleEmails' => true
        ),
        'orderBottomText' => array(
            'type' => 'text',
            'default' => "Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                <br> Sed posuere consectetur est at lobortis. Aenean eu leo quam.
                <br> Pellentesque ornare <a style=\"color: #e66161; font-weight: 500;font-family: 'Raleway',sans-serif; \" href=\"http://monsart.net/emails/order-1/\">sem&nbsp;lacinia&nbsp;quam&nbsp;venenatis</a> vestibulum."
        )
    ),
    'footer' => array(
        'copyright' => array(
            'type' => 'text',
            'default' => '© Copyright - MyCompany. Donec sed odio dui.'
        )
    ),
    'customCss' => array(
        
    )
);