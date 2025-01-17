
<style>
    .footer-section {
    /* background-color: #0a2847; */
    padding: 40px 0;
    /* color: #ffffff; */
    background-color: rgba(	1, 31, 63, 0.8); 
        /* backdrop-filter: blur(10px);  */
        /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.6); */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background: linear-gradient(to bottom, rgba(17, 101, 190, 0.91), rgba(0, 0, 0, 1));
}

.footer-content {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
   padding: 2px;
   
   
   
}



.footer-content .contact-info {
    text-align: center;
}

.footer-content .contact-info h5 {
    font-size: 18px;
    margin-bottom: 10px;
    font-weight: bold;
}

.footer-content .contact-info p {
    margin: 0;
    line-height: 1.6;
}

.social-media-icons {
    text-align: center;
    margin-bottom: 20px;
}

.social-media-icons a {
    color: #ffffff;
    margin: 0 10px;
    font-size: 20px;
    text-decoration: none;
}

.social-media-icons a:hover {
    color: #ffcd39;
}
.social-icon svg {
        transition: fill 0.3s ease;
    }
    .social-icon:hover svg {
        fill:  #ffcd39; /* Change this color to your desired hover effect color */
    }

.footer-bottom {
    text-align: center;
    padding-top: 10px;
    border-top: 1px solid #ffffff;
    font-size: 14px;
    color: #ffffff;
}
/*email*/
.contact-email {
            font-size: 1.1em;
            color: #333;
            text-align: center;
            
          
        }
        .contact-email a {
            color: white;
            text-decoration: none;
        }
        .contact-email a:hover {
            text-decoration: underline;
            color: aqua;
        }

        /*read button*/
        .paragraph {
            max-height: 50px;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .show-more .paragraph {
            max-height: 200px; /* Adjust this value to control expanded height */
        }
        .read-more-button {
            color: red;
            font-weight: bold;
            cursor: pointer;
            display: none;
        }

</style>
<footer class="footer-section text-white py-4">
    <div class="container">
        <div class="row footer-content">
            <div class="col-12 col-md-4 contact-info text-center mb-3 mb-md-0">
                <h5>Phone</h5>
                <p>Call: (+94) 76 834 5561</p>
                <p>(+94) 71 573 1098</p>
            </div>
            <div class="col-12 col-md-4 contact-info text-center mb-3 mb-md-0">
                <h5>Email</h5>
                <div class="contact-email"> <a href="mailto:infocuor@usci.ruh.ac.lk" >infocuor@usci.ruh.ac.lk</a>
            </div></div>
            <div class="col-12 col-md-4 contact-info text-center">
                <h5>Location</h5>
                <p>Wallamadama, Matara, Sri Lanka</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center social-media-icons mb-3">
                <a href="#" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center footer-bottom pt-2">
                <a href="https://www.facebook.com/yourpage" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/yourprofile" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/yourprofile" target="_blank" class="social-icon mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.196h.03V6.17h-2.4c.03.615 0 7.225 0 7.225h2.4z"/>
                    </svg>
                </a>
                <p class="mt-2">Copyright &copy ; 2024. Infocuor Initiative. All Rights Reserved.</p>
            </div>
        </div>
    </div>

