<style>
#div_login{
  border: 1px solid gray;
  border-radius: 3px;
  width: 470px;
  height: 270px;
  box-shadow: 0px 2px 2px 0px  gray;
  margin: 0 auto;
  margin-right: 355px;
}

#div_login h1{
  margin-top: 0px;
  font-weight: normal;
  padding: 10px;
  background-color: cornflowerblue;
  color: white;
  font-family: sans-serif;
}

#div_login div{
  clear: both;
  margin-top: 10px;
  padding: 5px;
}

#div_login .textbox{
  width: 96%;
  padding: 7px;
}

#div_login input[id=but_submit]{
  padding: 7px;
  width: 100px;
  background-color: lightseagreen;
  border: 0px;
  color: white;
}

</style>
<div class="container">
    <form method="post" action="index.php?action=loginValidate">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                <a href="views/register.php" class="btn btn-primary">Register</a>
            </div>
        </div>
    </form>
</div>