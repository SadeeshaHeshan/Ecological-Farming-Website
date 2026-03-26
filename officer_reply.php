<!DOCTYPE html>
<html>
<head>
    <title>My HTML Page</title>
    <style type="text/css">
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
            
        }
            nav{
                display: flex;
                width: 100%;
                background: #0a5071;
                position: relative;
                justify-content: space-between;
                text-align: center;
                padding: 15px 30px;
            }
                nav .icon{
                    font-size: 35px;
                    font-weight: 800;
                    color: #fff;
                    cursor: pointer;
                }
                nav ol{
                    display: flex;
                    list-style: none;
                    margin: auto 0;
                }
                nav ol li{
                    margin: 0 2px;
            
                }
                nav ol li a{
                    color: #fff;
                    font-size: 20px;
                    text-decoration: none;
                    text-transform: capitalize;
                    letter-spacing: 2px;
                    padding: 0px 10px;
                
                }
                nav ol li:hover a{
                    background: #ff7200;
                    color:#0a5071;
                }
            
                
        
        </style>
        
</head>
<body>
    <nav>
        <div class="icon">EcoAgri<b style="color: #FF0004">Sri Lanka</b></div>
    
    <ol>
    <li><a href="home.php">Home</a></li>
    <li><a href="About.php">About</a></li>
    <li><a href="user services.php">Services</a></li>
    <li><a href="conn.php">Contact</a></li>
    <li><a href="Login.php">Login Here</a></li>
    </ol>
    </nav>
    



</body>
</html>
