import builtins
import sys

def print_first_flag():
    print("Premier flag: FLAG{55H_IS_USEFUL}")
    
def restricted_import(*args, **kwargs):
    print("Accès interdit au mot 'import' !")

def restricted_open(*args, **kwargs):
    print("Accès interdit au mot 'open' !")

builtins.__import__ = restricted_import
builtins.open = restricted_open

print_first_flag()

while True:
    code = input(">>> ")
    try:
        exec(code)
    except Exception as e:
        print("Erreur :", e)

