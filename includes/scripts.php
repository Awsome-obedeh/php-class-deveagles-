    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <script>
        // jquery function
        $(document).ready(function() {
            console.log('jquery is working')

            // $('.box').click(function(){
            //     $('.box').css("width", '30px')
            //     $('.box').css("height", '70px')
            //     $('.box').css("backgroundColor", 'red')
            //     $('.box').text("ifeanyi")
            // })

            // handle form submission
            $('.form').submit((e) => {
                // the default of every form is to reload the page and 
                // we want to prevent that form default submit
                e.preventDefault();
                //    take form inpt values
                const email = $('.email').val()
                const password = $('.password').val()
                const err = $('.err')

                //    validate user input
                if (!email) {
                    err.css("display", "block")
                    err.text("provide email")
                } else if (!password) {
                    console.log('provide password')
                    err.css("display", "block")
                    err.text("provide password")

                    //   let error message go off after 4 seconds
                    setTimeout(() => {
                        err.css("display", "none")
                    }, 4000)

                } else {
                    $('.loader').css("display", "block")

                    setTimeout(() => {
                        // send your request
                        $.ajax({
                            url: 'api/endpoints.php',
                            method: 'POST',
                            data: {
                                "email": email,
                                "password": password,
                                "scope": "login"
                            },
                            // handle the response
                            success: function(response) {
                                // convert json response to object
                                const res = JSON.parse(response)
                                console.log(res)
                                // show user if there is any error(invalid credentails)
                                if (res.status == 400) {
                                    console.log('provide password')
                                    err.css("display", "block")
                                    err.text("Invalid credentials")
                                    $('.loader').css("display", "none")

                                    //   let error message go off after 4 seconds
                                    setTimeout(() => {
                                        err.css("display", "none")
                                    }, 4000)
                                }
                            }

                        })
                    }, 4000)


                }



            })
        })
    </script>