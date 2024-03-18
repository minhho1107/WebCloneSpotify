<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up - Spotify</title>
    <link rel="icon" href="https://accounts.scdn.co/sso/images/favicon.ace4d8543bbb017893402a1e9d1ac1fa.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/login-signup.css" />
</head>

<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-center p-4 header-logo">
            <svg role="img" viewBox="0 0 78 24" aria-label="Spotify" aria-hidden="false" height="100%" data-encore-id="logoSpotify">
                <title>Spotify</title>
                <path d="M18.616 10.639c-3.77-2.297-9.99-2.509-13.59-1.388a1.077 1.077 0 0 1-1.164-.363 1.14 1.14 0 0 1-.119-1.237c.136-.262.37-.46.648-.548 4.132-1.287 11-1.038 15.342 1.605a1.138 1.138 0 0 1 .099 1.863 1.081 1.081 0 0 1-.813.213c-.142-.02-.28-.07-.403-.145Zm-.124 3.402a.915.915 0 0 1-.563.42.894.894 0 0 1-.69-.112c-3.144-1.983-7.937-2.557-11.657-1.398a.898.898 0 0 1-.971-.303.952.952 0 0 1-.098-1.03.929.929 0 0 1 .54-.458c4.248-1.323 9.53-.682 13.14 1.595a.95.95 0 0 1 .3 1.286Zm-1.43 3.267a.73.73 0 0 1-.45.338.712.712 0 0 1-.553-.089c-2.748-1.722-6.204-2.111-10.276-1.156a.718.718 0 0 1-.758-.298.745.745 0 0 1-.115-.265.757.757 0 0 1 .092-.563.737.737 0 0 1 .457-.333c4.455-1.045 8.277-.595 11.361 1.338a.762.762 0 0 1 .241 1.028ZM11.696 0C5.237 0 0 5.373 0 12c0 6.628 5.236 12 11.697 12 6.46 0 11.698-5.372 11.698-12 0-6.627-5.238-12-11.699-12h.001Zm20.126 11.078c-2.019-.494-2.379-.84-2.379-1.57 0-.688.633-1.151 1.572-1.151.91 0 1.814.352 2.76 1.076a.131.131 0 0 0 .187-.03l.987-1.426a.139.139 0 0 0-.025-.185c-1.127-.928-2.396-1.378-3.88-1.378-2.18 0-3.703 1.342-3.703 3.263 0 2.06 1.315 2.788 3.585 3.352 1.932.457 2.258.84 2.258 1.524 0 .757-.659 1.229-1.72 1.229-1.18 0-2.141-.408-3.216-1.364a.13.13 0 0 0-.188.016l-1.106 1.35a.137.137 0 0 0 .013.188c1.252 1.147 2.79 1.752 4.451 1.752 2.35 0 3.869-1.317 3.869-3.356 0-1.723-1.003-2.676-3.465-3.29Zm10.487 2.31c0 1.454-.874 2.47-2.125 2.47-1.235 0-2.169-1.061-2.169-2.47 0-1.41.933-2.47 2.17-2.47 1.23 0 2.124 1.038 2.124 2.47Zm-1.706-4.354c-1.018 0-1.854.412-2.543 1.256v-.95a.136.136 0 0 0-.038-.095.132.132 0 0 0-.093-.04h-1.81a.131.131 0 0 0-.093.04.136.136 0 0 0-.039.096v10.546c0 .076.06.137.133.137h1.809a.132.132 0 0 0 .093-.041.136.136 0 0 0 .038-.096v-3.329c.69.794 1.525 1.18 2.543 1.18 1.893 0 3.808-1.494 3.808-4.35 0-2.858-1.915-4.354-3.808-4.354Zm8.72 6.839c-1.297 0-2.274-1.068-2.274-2.486 0-1.422.943-2.455 2.244-2.455 1.305 0 2.288 1.069 2.288 2.487 0 1.422-.949 2.454-2.258 2.454Zm0-6.838c-2.438 0-4.347 1.926-4.347 4.383 0 2.432 1.896 4.338 4.317 4.338 2.445 0 4.36-1.92 4.36-4.369 0-2.44-1.901-4.353-4.33-4.353Zm9.535.17h-1.99V7.117a.136.136 0 0 0-.08-.126.13.13 0 0 0-.052-.01h-1.809a.133.133 0 0 0-.093.04.136.136 0 0 0-.038.095v2.087h-.87a.131.131 0 0 0-.122.085.139.139 0 0 0-.01.052v1.595c0 .074.06.135.132.135h.87v4.126c0 1.667.809 2.513 2.404 2.513.648 0 1.186-.138 1.694-.434a.135.135 0 0 0 .067-.117V15.64a.137.137 0 0 0-.063-.115.13.13 0 0 0-.129-.006c-.349.18-.685.263-1.061.263-.58 0-.84-.271-.84-.876V11.07h1.99a.13.13 0 0 0 .094-.04.136.136 0 0 0 .039-.096V9.339a.137.137 0 0 0-.039-.096.132.132 0 0 0-.094-.04v.001Zm6.934.007v-.255c0-.755.281-1.092.914-1.092.376 0 .68.077 1.019.194a.13.13 0 0 0 .118-.02.135.135 0 0 0 .056-.11V6.365a.137.137 0 0 0-.026-.081.133.133 0 0 0-.068-.05 4.852 4.852 0 0 0-1.502-.22c-1.67 0-2.554.965-2.554 2.788v.393h-.87a.132.132 0 0 0-.093.04.136.136 0 0 0-.038.096v1.603c0 .075.059.136.132.136h.87v6.364c0 .075.058.135.131.135h1.809c.072 0 .131-.06.131-.135V11.07h1.69l2.586 6.362c-.294.669-.583.802-.977.802-.319 0-.654-.098-.998-.29a.133.133 0 0 0-.105-.01.135.135 0 0 0-.078.072l-.612 1.38a.137.137 0 0 0 .056.175 3.733 3.733 0 0 0 1.932.508c1.334 0 2.073-.638 2.724-2.355l3.137-8.317a.14.14 0 0 0-.014-.126.131.131 0 0 0-.108-.06h-1.883a.132.132 0 0 0-.126.092l-1.928 5.651L69.006 9.3a.133.133 0 0 0-.124-.088h-3.09v.001Zm-4.02-.008h-1.809a.132.132 0 0 0-.093.041.136.136 0 0 0-.038.096v8.094c0 .075.06.135.132.135h1.809c.072 0 .131-.06.131-.135V9.34a.136.136 0 0 0-.038-.096.133.133 0 0 0-.094-.04Zm-.896-3.685a1.295 1.295 0 0 0-.919.393c-.243.25-.379.586-.377.937a1.342 1.342 0 0 0 .377.938 1.304 1.304 0 0 0 .92.393c.346-.002.677-.143.92-.393s.379-.587.377-.938c0-.735-.581-1.33-1.296-1.33h-.002Zm15.918 4.49h-.331v.434h.331c.165 0 .264-.083.264-.216 0-.142-.099-.217-.264-.217Zm.215.619.36.517h-.304l-.323-.474h-.279v.474h-.254v-1.37h.595c.31 0 .515.163.515.436a.412.412 0 0 1-.31.417Zm-.282-1.31c-.652 0-1.146.532-1.146 1.183 0 .65.49 1.175 1.139 1.175.652 0 1.147-.532 1.147-1.183 0-.65-.492-1.174-1.14-1.174Zm-.007 2.488a1.259 1.259 0 0 1-.904-.384 1.296 1.296 0 0 1-.368-.92c0-.717.563-1.314 1.279-1.314a1.259 1.259 0 0 1 .903.384 1.295 1.295 0 0 1 .369.921c0 .717-.563 1.314-1.279 1.314Z">
                </path>
            </svg>
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-grid gap-3 main-panel">
                <h2 class="d-flex justify-content-center mt-3 fw-bold top-text">Sign up for free to start listening.
                </h2>
                <div class="d-grid gap-3">
                    <!-- <button type="button" class="btn btn-primary rounded-pill button-custom">
                        <div class="d-flex justify-content-center align-items-center">
                            <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" fill="currentColor" class="icon-button">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.093 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.563V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z">
                                </path>
                            </svg>
                            <span class="text-uppercase ps-2">Sign up with Facebook</span>
                        </div>
                    </button>
                    <button type="button" class="btn btn-outline-secondary rounded-pill button-custom">
                        <div class="d-flex justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-google icon-button" viewBox="0 0 16 16">
                                <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                            </svg>
                            <span class="text-uppercase ps-2">Sign up with Google</span>
                        </div>
                    </button> -->
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <!-- <span class="col-5 border-bottom border-secondary border-1 opacity-50"></span>
                    <span class="col-1 p-2 fw-bold">OR</span>
                    <span class="col-5 border-bottom border-secondary border-1 opacity-50"></span> -->
                </div>
                <form action="/Spotify/user/signup" method="post" onsubmit="return validateForm()">
                    <!-- Các trường biểu mẫu -->
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">What's your email?</label>
                        <input type="email" name="email" id="email" class="form-control input-custom" placeholder="Enter your email." aria-describedby="helpId">
                        <!-- <small id="helpId" class="text-muted"><a href="#" class="text-success">Use phone number instead.</a></small> -->
                    </div>
                    <div class="mb-3">
                        <label for="cofirmEmail" class="form-label fw-bold">Cofirm your email</label>
                        <input type="email" class="form-control input-custom" name="cofirmEmail" id="cofirmEmail" placeholder="Enter your email again." />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Create a password</label>
                        <div class="input-group">
                            <input type="password" class="form-control border-end-0 input-custom" name="password" id="password" placeholder="Create a password." />
                            <span class="input-group-text bg-white border-start-0" id="eye-icon">
                                <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" class="opacity-50" onclick="showPassword()">
                                    <path d="M22.207 2.824a1 1 0 1 0-1.414-1.414L17.15 5.053C15.621 4.363 13.92 4 12 4 8.671 4 5.996 5.091 3.742 7.089c-.896.794-2.3 2.353-3.381 4.453L.125 12l.236.458c1.082 2.1 2.485 3.659 3.381 4.453.278.246.562.479.853.697L1.793 20.41a1 1 0 1 0 1.414 1.414l3.126-3.126.003.002 1.503-1.503-.004-.001 1.73-1.73.004.001 1.567-1.567h-.004l4.68-4.681.001.004 1.595-1.595-.002-.003.11-.109.002.002 1.444-1.444-.003-.002 3.248-3.248zM14.884 7.32l-5.57 5.57A4.035 4.035 0 0 1 8.113 10c0-2.23 1.761-4 3.886-4 1.137 0 2.17.506 2.884 1.319zM7.9 14.304l-1.873 1.873a11.319 11.319 0 0 1-.957-.763C4.396 14.818 3.3 13.621 2.387 12c.913-1.62 2.01-2.818 2.683-3.414.519-.46 1.061-.863 1.634-1.204A6.073 6.073 0 0 0 6.113 10c0 1.681.682 3.21 1.786 4.304zm11.568-5.2 1.415-1.415a16.503 16.503 0 0 1 2.756 3.853l.236.458-.236.458c-1.082 2.1-2.485 3.659-3.381 4.453C18.004 18.908 15.328 20 12 20a13.22 13.22 0 0 1-3.08-.348l1.726-1.726c.435.05.886.074 1.354.074 2.833 0 5.037-.907 6.931-2.586.674-.596 1.77-1.793 2.683-3.414a14.515 14.515 0 0 0-2.146-2.896z">
                                    </path>
                                    <path d="M17.843 10.729c-.328 2.755-2.494 4.956-5.24 5.24l5.24-5.24z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">What should we call you?</label>
                        <input type="text" name="name" id="name" class="form-control input-custom" placeholder="Enter a profile name." aria-describedby="helpId">
                        <small id="helpId" class="text-muted">This appears on your profile.</small>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label fw-bold">What's your date of birth?</label>
                        <div class="d-flex justify-content-between gap-3">
                            <div class="d-block col">
                                <span>Day</span>
                                <input type="text" aria-invalid="false" id="day" inputmode="numeric" maxlength="2" name="day" pattern="((0?[1-9])|([12][0-9])|(3[01]))" placeholder="DD"  value="" data-encore-id="formInput" class="form-control mt-2 input-custom">
                            </div>
                            <div class="d-block col-6">
                                <span>Month</span>
                                <select id="month" name="month"  aria-invalid="false" class="form-select mt-2 input-custom">
                                    <option selected="" disabled="" value="">Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div class="d-block col">
                                <span>Year</span>
                                <input type="text" aria-invalid="false" id="year" inputmode="numeric" maxlength="4" name="year" pattern="(19[0-9]{2})|(200)[0-9]|(201)[0-0]" placeholder="YYYY" value="" data-encore-id="formInput" class="form-control mt-2 input-custom">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="mb-5">
                        <label for="gender" class="form-label d-block fw-bold m-0">What's your gender?</label>
                        <div class="form-check form-check-inline me-4 mt-2">
                            <input class="form-check-input radio-custom" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline me-4 mt-2">
                            <input class="form-check-input radio-custom" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="Female">Female</label>
                        </div>
                        <div class="form-check form-check-inline me-4 mt-2">
                            <input class="form-check-input radio-custom" type="radio" name="gender" id="non-binary" value="non-binary">
                            <label class="form-check-label" for="non-binary">Non-binary</label>
                        </div>
                        <div class="form-check form-check-inline me-4 mt-2">
                            <input class="form-check-input radio-custom" type="radio" name="gender" id="other" value="other">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                        <div class="form-check form-check-inline me-4 mt-2">
                            <input class="form-check-input radio-custom" type="radio" name="gender" id="prefernottosay" value="prefernottosay">
                            <label class="form-check-label" for="prefernottosay">Prefer not to say</label>
                        </div>
                    </div> -->
                    <div class="mb-3">
                        <div class="d-flex flex-column gap-3">
                            <!-- <div class="form-check">
                                <input type="checkbox" class="form-check-input checkbox-custom" id="remember" />
                                <label class="form-check-label" for="remember">I would prefer not to receive marketing
                                    messages from Spotify</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkbox-custom" id="remember" />
                                <label class="form-check-label" for="remember">Share my registration data with Spotify's
                                    content providers for marketing purposes.</label>
                            </div> -->
                            <div class="d-grid gap-2">
                                <span class="bottom-text">By clicking on sign-up, you agree to Spotify's <a href="https://www.spotify.com/vn-vi/legal/end-user-agreement/" class="text-success">Terms and Conditions of Use</a>.</span>
                                <span class="bottom-text">To learn more about how Spotify collects, uses, shares and
                                    protects your personal data, please see <a href="https://www.spotify.com/vn-vi/legal/privacy-policy/" class="text-success">Spotify's Privacy Policy</a>.</span>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success rounded-pill text-uppercase fw-bold button-signup">
                                        Sign up
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-success rounded-pill text-uppercase fw-bold button-signup">
                        Sign up
                    </button> -->
                </form>


                <span class="border-bottom border-secondary border-1 opacity-50"></span>
                <span class="d-flex justify-content-center pb-3 fw-bold">Have an account?&nbsp;<a href="Login.php" class="text-success">Log in</a>.</span>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="../../js/LoginSignup.js"></script>
</body>

</html>