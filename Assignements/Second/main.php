

<!DOCTYPE html><html lang="en"><head>    <link rel="stylesheet" href="mn.css">
    <script src="mns.js" type="text/javascript"></script>    <title>Validating the Form</title>
</head><body>    
    <div class="clr"><h1 style="text-align: center">Test makers.IO</h1></div>
    <div class="ad1"><h2>Ad Box 1</h2></div>
    <div class="main">        <h3 class="ques"> Fill and Validate the Form</h3>        <div>
            <form action="hel.php" method="post">
                <fieldset class="fm" style="padding: 3%;padding-left: 8%;padding-bottom: 5%;">
                    Name <span class="imp">*</span> :<input class="bx" type="text" name="nm" placeholder="Enter Name"> <span class="wrn" id="w1"></span><Br><br>
                    Address <span class="imp">*</span> :<input class="bx" type="text" name="ad" placeholder="Enter Address"> <span class="wrn" id="w2"></span><Br><br>
                    Zip Code <span class="imp">*</span> :<input class="bx" type="number" name="cd" placeholder="Enter Zip Code"> <span class="wrn" id="w3"></span><Br><br>
                    Country <span class="imp">*</span> :<select class="bx" name="cnty">
                        <option>&emsp;-- Please Select --&emsp;</option>
                        <option value="India">India</option>  <option value="China">China</option> <option value="Pakistan">Pakistan</option>  <option value="Japan">Japan</option>
                        <option value="Korea">Korea</option>  <option value="Russia">Russia</option>  </select> <span class="wrn" id="w4"></span> <Br><br>                    
                    Gender <span class="imp">*</span> :<input id="r1" type="radio" name="g" value="Male"><label class="l1" for="r1">Male</label>
                    <input id="r2" type="radio" name="g" value="Female"><label class="l2" for="r2">Female</label> <span class="wrn" id="w5"></span> <Br><br>                    
                    Preferences  <span class="imp">*</span> :<input id="c1" name="p1" type="checkbox" value="Red"> <label class="l1" for="c1">Red</label>
                    <input id="c2" type="checkbox" name="p2" value="Green"> <label class="l2" for="c2">Green</label>
                    <input id="c3" type="checkbox" name="p3" value="Blue"> <label class="l3" for="c2">Blue</label> <span class="wrn" id="w6"></span> <Br><br>
                    Phone <span class="imp">*</span> :<input class="bx" type="number" name="ph" placeholder="Enter Mobile number"> <span class="wrn" id="w7"></span><Br><br>
                    E-Mail <span class="imp">*</span> :<input class="bx" type="email" name="em" placeholder="Enter E-Mail"> <span class="wrn" id="w8"></span> <Br><br>
                    Password <span class="imp">*</span> :<input class="bx" type="password" name="ps" placeholder="Enter Password"> <span class="wrn" id="w9"></span><Br><br>
                    Re-Enter Password <span class="imp">*</span> :<input class="bx" type="password" name="rp" placeholder="Re-Enter Password"> <span class="wrn" id="w10"></span><Br><br>                    <div class="btn">
                        <input type="submit" value="SEND">&emsp;<input type="reset" value="CLEAR" />
                    </div>                </fieldset>            </form>
        </div>    </div>
    <div class="ad2"><h2>Ad Box 2</h2></div></body></html>
