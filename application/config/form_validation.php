<?php
$config=[
    "add_article_rules"=>[
                            [
                                "field"=>"article_title",
                                "label"=>"Article Title",
                                "rules"=>"required"
                            ],
                            [
                                "field"=>"article_body",
                                "label"=>"Article Body",
                                "rules"=>"required"
                            ]
                            ],
    "registration_rules"=>[
                             [
                                "field"=>"firstname",
                                "label"=>"First name",
                                "rules"=>"required|trim|alpha"
                             ],
                             [
                                "field"=>"lastname",
                                "label"=>"Last name",
                                "rules"=>"required|trim|alpha"
                             ],
                             [
                                "field"=>"email",
                                "label"=>"Email",
                                "rules"=>"required|trim|valid_email|is_unique[users.email]"
                             ],
                             [
                                "field"=>"password",
                                "label"=>"password",
                                "rules"=>"trim|required|min_length[8]"
                             ]
                          ]                        
]
?>