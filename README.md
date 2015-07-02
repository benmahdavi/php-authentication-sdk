# php-authentication-sdk
PHP SDK for the Crowd Valley API 

## Usage

Open ‘generate-header.php’ and enter your values for:

- Username
- Password
- Network Name
- API Key
- API Secret

Then, in the Terminal or Command Prompt, go to the ‘php-sdk’ folder run the command ‘php generate-header.php’. This will print out a token in the form of a text string that you can enter as the ‘cv-auth’ header when making calls to the Crowd Valley API. It will look something like this:

AuthToken ApiKey=“your—api-key-0001", TokenDigest="cFziWZJsfSl5T3R8hfZDUkBWZ68=", Nonce="8d09e353dfa721547d3fa9fe64770029", Created="2015-07-01T13:51:24+01:00", Username=“yourname@youremail.com”, Password="Xl1qQGL1KHtIVzkyGylHWQ=="

Make sure that you copy the full string including the double quote mark at the end.

If the command does not print out a token in this format or if it gives any other error then please check that you have PHP installed on your machine. 

## Support

Please contact Crowd Valley at support@crowdvalley.com for any questions.