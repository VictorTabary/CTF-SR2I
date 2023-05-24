import builtins
import sys

def print_first_flag():
    print("Premier flag: FLAG{55H_IS_USEFUL}")

print_first_flag()

while True:
    code = input(">>> ")
    if code.__contains__("import"):
        print("Accès interdit au mot 'import'")
    elif code.__contains__("open"):
        print("Accès interdit au mot 'open'")
    else:
        try:
            r = eval(code)
            print(r)
        except Exception as e:
            print("Erreur :", e)

