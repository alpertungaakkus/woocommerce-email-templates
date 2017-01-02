<?php
return array(
    'google-api-key' => 'AIzaSyDbSXRrMo7ljx7NHeNja8CDnPSAWj6NQEE',
    'emailTypes' => array(
        'admin_new_order' => array(
            'text' => '<p>You have received an order from [ma_firtsname] [ma_lastname]</p><p>Their order is as follows: [ma_order] [ma_date]</p>',
            'title' => 'New order received!',
            'name' => 'New Order'
        ),
        'admin_cancelled_order' => array(
            'text' => '<p>The order [ma_order] [ma_date] for [ma_fullname] has been canceled.</p>',
            'title' => 'Cancelled order',
            'name' => 'Canceled Order'
        ),
        'admin_failed_order' => array(
            'title' => 'Failed order',
            'text' => '<p>Payment for order [ma_order] [ma_date] from [ma_fullname] has failed.</p>',
            'name' => 'Failed Order'
        ),
        'customer_on_hold_order' => array(
            'name' => 'Order On-hold',
            'title' => 'Thank you for your order',
            'text' => '<p>Your order is on-hold until we confirm payment has been received. Your order details are shown below for yourreference:</p>'
        ),
        'customer_processing_order' => array(
            'name' => 'Processing Order',
            'title' => 'Your order is being processed',
            'text' => '<p>Your order [ma_order] [ma_date] has been received and is now being processed.</p>'
        ),
        'customer_completed_order' => array(
            'name' => 'Completed Order',
            'title' => 'Your order is complete',
            'text' => '<p>Your order [ma_order] [ma_date] at has been completed.</p><p>We’re just letting you know. No further action is required.</p>'
        ),
        'customer_refunded_order' => array(
            'name' => 'Refunded Order',
            'title' => 'Your order has been refunded',
            'text' => '<p>Your order [ma_order] [ma_date] has been refunded. Thanks</p>'
        ),
        'customer_invoice' => array(
            'name' => 'Customer Invoice',
            'title' => 'Invoice for order [ma_order] [ma_date]',
            'text' => '<p>Thanks for your order on.</p><p>To pay for this order please use the following link:[ma_pay_now]</p>'
        ),
        'customer_note' => array(
            'name' => 'Customer Note',
            'title' => '',
            'text' => 'Hello'
        ),
        
    ),
);