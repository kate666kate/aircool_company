<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Quote Request',
    'email_message' => 'You have a new quote request',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'admin@aircoolservice.com.au',
    'toCopy' => '',
    'toHiddenCopy' => ''
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => '',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'\' is required.'
    )
    ),
    'phone' => array(
    'order' => 2,
    'type' => 'tel',
    'label' => '',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'\' is required.'
    )
    ),
    'text' => array(
    'order' => 3,
    'type' => 'string',
    'label' => '',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'\' is required.'
    )
    ),
    'product' => array(
    'order' => 4,
    'type' => 'string',
    'label' => '',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>