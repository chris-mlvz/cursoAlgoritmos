def swap_text(string):
    result = ""
    for letter in string:
        if letter == letter.upper():
            result += letter.lower()
        else:
            result += letter.upper()
    print(result)

swap_text("hola TODOS")
