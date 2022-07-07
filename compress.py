import os

for file in os.listdir("."):
    if file.endswith(".ttf") or file.endswith(".otf"):
        # print(f"binary_to_compressed_c.exe {os.path.join(os.getcwd(),file)} {file} > {(file.replace(' ',''))}.cpp")
        os.system(f"binary_to_compressed_c.exe {os.path.join(os.getcwd(),file)} {file} > {(file.replace(' ',''))}.cpp")
        print(os.path.join(os.getcwd(), file))