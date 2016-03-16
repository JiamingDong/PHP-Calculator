<!DOCTYPE html>
<html lang="en">
    <head>
        <title>JD Calculator</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            var display = "";
        </script>
        <script src="script.js"></script>
    </head>
    <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-sm-3 col-md-6 col-lg-6">
                <h2>Calculator by Jiaming Dong</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-md-3"></div>
            <div class="col-sm-6 col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="row" style="margin-bottom: -20px;">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="panel panel-primary">
                                    <div id="display-board" class="panel-body" style="text-align: right; font-size:160%; color:slategrey;">
                                        0
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <button id="btn-lparen" type="button" class="btn btn-lg btn-block btn-info">&nbsp;(&nbsp;</button>
                            </div>
                            <div class="col-md-2">
                                <button id="btn-rparen" type="button" class="btn btn-lg btn-block btn-info">&nbsp;)&nbsp;</button>
                            </div>
                            <div class="col-md-2">
                                <button id="btn-undo" type="button" class="btn btn-lg btn-block btn-info">&nbsp;<-&nbsp;</button>
                            </div>
                            <div class="col-md-4">
                                <button id="btn-divide" type="button" class="btn btn-lg btn-danger btn-block">&nbsp;/&nbsp;</button>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <button id="btn-1" type="button" class="btn btn-lg btn-block btn-primary btn-num">&nbsp;1&nbsp;</button>
                            </div>
                            <div class="col-md-2">
                                <button id="btn-2" type="button" class="btn btn-lg btn-block btn-primary btn-num">&nbsp;2&nbsp;</button>
                            </div>
                            <div class="col-md-2">
                                <button id="btn-3" type="button" class="btn btn-lg btn-block btn-primary btn-num">&nbsp;3&nbsp;</button>
                            </div>
                            <div class="col-md-4">
                                <button id="btn-multiply" type="button" class="btn btn-lg btn-danger btn-block">&nbsp;*&nbsp;</button>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <button id="btn-4" type="button" class="btn btn-lg btn-block btn-primary btn-num">&nbsp;4&nbsp;</button>
                            </div>
                            <div class="col-md-2">
                                <button id="btn-5" type="button" class="btn btn-lg btn-block btn-primary btn-num">&nbsp;5&nbsp;</button>
                            </div>
                            <div class="col-md-2">
                                <button id="btn-6" type="button" class="btn btn-lg btn-block btn-primary btn-num">&nbsp;6&nbsp;</button>
                            </div>
                            <div class="col-md-4">
                                <button id="btn-minus" type="button" class="btn btn-lg btn-danger btn-block">&nbsp;-&nbsp;</button>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <button id="btn-7" type="button" class="btn btn-lg btn-block btn-primary btn-num">&nbsp;7&nbsp;</button>
                            </div>
                            <div class="col-md-2">
                                <button id="btn-8" type="button" class="btn btn-lg btn-block btn-primary btn-num">&nbsp;8&nbsp;</button>
                            </div>
                            <div class="col-md-2">
                                <button id="btn-9" type="button" class="btn btn-lg btn-block btn-primary btn-num">&nbsp;9&nbsp;</button>
                            </div>
                            <div class="col-md-4">
                                <button id="btn-plus" type="button" class="btn btn-lg btn-danger btn-block">&nbsp;+&nbsp;</button>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <button id="btn-point" type="button" class="btn btn-lg btn-block btn-info">&nbsp;.&nbsp;</button>
                            </div>
                            <div class="col-md-2">
                                <button id="btn-0" type="button" class="btn btn-lg btn-block btn-primary btn-num">&nbsp;0&nbsp;</button>
                            </div>
                            <div class="col-md-2">
                                <button id="btn-clear" type="button" class="btn btn-lg btn-block btn-info">&nbsp;C&nbsp;</button>
                            </div>
                            <div class="col-md-4">
                                <button id="btn-result" type="button" class="btn btn-lg btn-warning btn-block">&nbsp;=&nbsp;</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: jiamingdong
 * Date: 3/15/16
 * Time: 11:32 AM
 */


?>