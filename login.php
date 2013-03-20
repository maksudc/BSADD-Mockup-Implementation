<?php require_once 'templates/header.php'; ?>
<?php require_once 'templates/menubar_login.php'; ?>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span7">
            <img src="assets/images/valley.jpg" class="img-polaroid"/>
        </div>
        <div class="span5">
            <div class="row-fluid">
                <div class="span12">
                    <img src="assets/images/photoshop-home.png"/>
                </div>
                <div class="span12"></div>
                <div class="span12">
                    <form class="form-horizontal">
                        <table>
                            <tr>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="text" placeholder="Username"/>
                                </div>
                            </div>
                            </tr>
                            <tr>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="text" placeholder="password"/>
                                </div>
                            </div>
                            </tr>
                            <tr>
                            <div class="control-group">
                                <div class="controls">
                                    &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                    <input type="submit" class="btn btn-larger" value="Login"/>
                                    <br/>                                   
                                </div>
                            </div>
                            </tr>
                            <tr>
                            <p class="pull-right"> Not Joined. Why not <a href="#" style="color: blue">register ?</a></p>
                            </tr>
                        </table>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'templates/footer.php'; ?>