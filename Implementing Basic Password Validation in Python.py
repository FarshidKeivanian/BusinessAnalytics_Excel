# Password validation in Python using the naive method

# Function to validate the password
def password_check(passwd):
    SpecialSym =['$', '@', '#', '%']  # Define allowed special symbols
    val = True  # Initial flag to indicate the password validity

    # Check password length constraints
    if len(passwd) < 6:
        print('Length should be at least 6')
        val = False
    if len(passwd) > 20:
        print('Length should not be greater than 20')  # Corrected the message
        val = False

    # Check for digits
    if not any(char.isdigit() for char in passwd):
        print('Password should have at least one numeral')
        val = False

    # Check for uppercase letters
    if not any(char.isupper() for char in passwd):
        print('Password should have at least one uppercase letter')
        val = False

    # Check for lowercase letters
    if not any(char.islower() for char in passwd):
        print('Password should have at least one lowercase letter')
        val = False

    # Check for special characters
    if not any(char in SpecialSym for char in passwd):
        print('Password should have at least one of the symbols $@#%')
        val = False

    return val  # Return the validity of password

# Main function to handle the user input and validation process
def main():
    passwd = input("Enter the password: ")
    while not password_check(passwd):  # Loop until a valid password is entered
        print("Invalid password, reenter please:")
        passwd = input("Enter the password: ")
    print("Password is valid.")

# Driver code
if __name__ == '__main__':
    main()
