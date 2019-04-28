<!DOCTYPE HTML>
<html>
<head>
<!-- importing jquery and semantic ui by cdn. -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
<!-- Some css for view. -->
<style>
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
    .ui.input {
    font-size: 1em;
    width: 100%;
    margin-bottom: 10px;
    }
</style>
</head>
<body>
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
    <img src="https://semantic-ui.com/examples/assets/images/logo.png" class="image">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    <?php echo form_open('login'); ?>
      <div class="ui stacked secondary  segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div><input class="ui fluid large teal submit button" type="submit" value="Login"></div>
      </div>
      <div class="ui error message">
         <?php 
            if(!empty($wrong_input))
                echo $wrong_input['msg'];
            echo validation_errors();
         ?>
      </div>
    </form>
    <div class="ui message">
      New to us? <a href="">Register</a>
    </div>
  </div>
</div>
</body>
</html>