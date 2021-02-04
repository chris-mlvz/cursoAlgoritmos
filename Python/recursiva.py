def cuentaRegresiva(numero):
    numero -= 1
    
    if(numero > 0):
        print(numero)
        cuentaRegresiva(numero)
    else:
        print("Feliz año nuevo")
    
cuentaRegresiva(10)