<?php
$apiKey = "rzp_test_eUgwB4C7fYhnil";
$imagePath = "images/logos/logo131.png"; // Relative path from the PHP file to the image
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<form id="paymentForm">
<script 
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>"
    data-amount="350000"
    data-currency="INR"
    data-id="<?php echo 'OID' .rand(10,100).'END'; ?>"
    data-buttontext="Pay with Razorpay"
    data-name="Passion Beats"
    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami" 
    data-image="<?php echo $imagePath; ?>"
    data-prefill.name="<?php echo $_POST['name']; ?>"
    data-prefill.email="<?php echo $_POST['email']; ?>"
    data-prefill.contact="<?php echo $_POST['mobile']; ?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<script>
    $(document).ready(function () {
        // Define Razorpay payment options
        var options = {
            "key": "<?php echo $apiKey; ?>",
            "amount": "350000", // Amount is in paise
            "currency": "INR",
            "name": "Passion Beats",
            "description": "A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami",
            "image": "<?php echo $imagePath; ?>",
            "handler": function (response) {
                // Redirect after successful payment
                window.location.href = "http://localhost/Appsmith-main/Appsmith-main/base.html";
            },
            "prefill": {
                "name": "<?php echo $_POST['name']; ?>",
                "email": "<?php echo $_POST['email']; ?>",
                "contact": "<?php echo $_POST['mobile']; ?>"
            },
            "theme": {
                "color": "#F37254"
            }
        };

        // Create the Razorpay payment instance
        var rzp = new Razorpay(options);

        // Open Razorpay checkout on form submission
        $('#paymentForm').submit(function (e) {
            e.preventDefault(); // Prevent default form submission
            rzp.open(); // Open Razorpay checkout
        });
    });
</script>
