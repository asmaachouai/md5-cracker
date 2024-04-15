# MD5 Cracker

This is a simple PHP application that takes an MD5 hash of a two-character lowercase string and attempts to hash all two-character combinations to determine the original two characters.

## How it Works

1. Enter an MD5 hash of a two-character lowercase string into the input field.
2. Click the "Crack MD5 Hash" button.
3. The application will attempt to crack the MD5 hash using a brute-force approach by hashing all possible two-character combinations and comparing them to the provided hash.
4. If a match is found, the original two-character string is displayed. Otherwise, a message indicating that the string was not found is displayed.

## Setup

1. Clone or download this repository to your local machine.
2. Ensure you have PHP installed on your machine.
3. Navigate to the directory where the files are located.
4. Start a local web server using PHP's built-in web server:
5. Open your web browser and go to http://localhost:8000/index.php to access the application.

## Example

For example, if you have the MD5 hash `187ef4436122d1cc2f40dc2b92f0eba0`, which corresponds to the string `"ab"`, entering this hash into the application will display `"ab"` as the original text.

## Note

This application is intended for educational purposes and to demonstrate how MD5 cracking works using a simple brute-force approach. It may not be efficient for larger hash spaces or secure against strong hashing algorithms. Use it responsibly and do not use it for malicious purposes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
