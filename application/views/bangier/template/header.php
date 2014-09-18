<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="<?php echo $this->config->item('keywords') ?>" />
        <meta name="description" content="<?php echo $this->config->item('description') ?>" />
        <meta name="autor" content="<?php echo $this->config->item('author') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().APPPATH.'views/bangier/css/bootstrap.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().APPPATH.'views/bangier/css/style.css' ?>" />
        
        <script type="text/javascript" src="<?php echo base_url().APPPATH.'views/bangier/js/jquery-2.1.1.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().APPPATH.'views/bangier/js/bootstrap.min.js' ?>"></script>
        
        
        <title><?php echo $this->config->item('title') ?></title>
    </head>
    <body>
        <header>
            
            <nav class="navbar navbar-default" role="navigation">
              <div class="container">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><?php echo $this->config->item('title') ?></a>
                </div>

                <div class="collapse navbar-collapse" id="mobile-menu">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Glowna</a></li>
                    <li><a href="home">Najlepsze</a></li>
                    <li><a href="poczekalnia">Poczekalnia</a></li>
                    <li><a href="#">Losuj</a></li>
                  </ul>

                  <ul class="nav navbar-nav navbar-right user-menu">
                    <li><a href="#">Log in</a></li>
                    <li><a href="#">Sign up</a></li>
                    
                  </ul>                
                    <form class="navbar-form navbar-right search" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search...">
                    </div>
                    <button type="submit" class="glyphicon glyphicon-search search-btn"></button>
                  </form>
                </div>
              </div>
              </div>
            </nav>
          
        </header>