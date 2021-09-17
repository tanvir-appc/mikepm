import os
import os.path
import json
import glob
import re
import sys

encoder = '/Users/tanvirahmedchowdhury/Desktop/mikeproperties/libwebp-1.2.0-mac-10.15/bin/cwebp'
decoder = '/Users/tanvirahmedchowdhury/Desktop/mikeproperties/libwebp-1.2.0-mac-10.15/bin/dwebp'

image_formats = ["png","jpg"];

def get_image_paths(current_dir):
    files = os.listdir(current_dir);
    paths = []; # To store relative paths of all png and jpg images

    for file in files:
        file = file.strip()
        if os.path.isdir(file):
            for image_format in image_formats:
                image_paths = glob.glob(os.path.join(".", file, "*." + image_format))
                if image_paths:
                    paths.extend(image_paths);

    return paths

if __name__ == "__main__":
    image_paths = get_image_paths(".");
    #print(json.dumps(image_paths, indent=4))

    # Display all images inside image_paths
    for image_path in image_paths:
        image_name = os.path.split(os.path.splitext(image_path)[0])[-1]
        image_name = image_name.replace("(", "")
        image_name = image_name.replace(")", "")
        
        main_image_path = os.path.split(image_path)[-2]
        image_path = image_path.replace("(", "\(")
        image_path = image_path.replace(")", "\)")
        webp_img = main_image_path+'/'+image_name+'.webp'
        if os.path.exists(webp_img):
            os.remove(webp_img)
        #os.system(encoder+' '+image_path+' -jpeg_like -o '+webp_img)
        try:
            os.system(encoder+' '+image_path+' -o '+webp_img)
            print(encoder+' '+image_path+' -o '+webp_img)
        except OSError as err:
            print("OS error: {0}".format(err))
        #os.system(encoder+' '+new_img+' -q 100 -resize 1024 0 -o '+w
        #image_name = os.path.split(image_path)[-1]
        #webp_img = image_path+'/'+img_name+'.webp'
        #show_images(image_path);
        #print('\n')

"""     
img = str(result.group(1))
                img_name = itemid+'-'+str(urlserial)
                new_img = new_dir+'/'+img_name+'.aspx'
                webp_img = jpg_dir+'/'+img_name+'.webp'
                jpg_img = jpg_dir+'/'+img_name+'.webp'
                if not os.path.exists(new_img):
                    urlretrieve(img, new_img)
                if not os.path.exists(jpg_img):
                    os.system(encoder+' '+new_img+' -q 100 -resize 1024 0 -o '+w
"""
