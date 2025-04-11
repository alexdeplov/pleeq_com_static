import datetime
import os
import json
from PIL import Image
from PIL.ExifTags import TAGS

# Configuration
image_folder = "/Users/alexander/GitHub/pleeq_com_static/rss/80s/" 
rss_file = "rss.xml"

# RSS header 
rss_header = f"""<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
<channel>
  <title>Pleeq Bookmarks</title>
  <link>https://pleeq.com/404-ap.html</link>
  <description>RSS feed generated from images</description>
"""

# Function to extract image data and create an RSS item string
def process_image(image_path):
    with Image.open(image_path) as img:
        exif_data = img._getexif() or {} 
        user_comment = exif_data.get(37510, '')  # UserComment tag

        # Parse JSON data from UserComment
        try:
            comment_data = json.loads(user_comment)
            image_description = comment_data.get("prompt", "") 
        except json.JSONDecodeError:
            image_description = ""  # Handle invalid JSON

        filename = os.path.splitext(os.path.basename(image_path))[0].split('.')[0] 
        creation_timestamp = os.path.getctime(image_path)
        creation_date = datetime.datetime.fromtimestamp(creation_timestamp).strftime('%a, %d %b %Y %H:%M:%S %z')
        filename_with_underscores = creation_date.replace(" ", "_") + filename.replace(" ", "_")
        filename_with_spaces = filename.replace("-", " ")

        item_str = f"""  <item>
    <title>{filename_with_spaces}</title>
    <link>https://pleeq.com/rss/80s/{filename}.jpg</link> 
    <pubDate>{creation_date}</pubDate>
    <description>{image_description}</description>
    <guid>{filename_with_underscores}</guid>  
    <enclosure url="https://pleeq.com/rss/80s/{filename}.jpg" type="image/jpeg"/> 
  </item>
"""
        return item_str

# Main logic
rss_content = rss_header

for filename in os.listdir(image_folder):
    if filename.endswith(('.jpg', '.jpeg', '.png')):
        filepath = os.path.join(image_folder, filename)
        rss_content += process_image(filepath)

rss_content += "</channel>\n</rss>"

# Write to RSS file
with open("/Users/alexander/GitHub/pleeq_com_static/rss/80s.xml", "w", encoding="utf-8") as f:
    f.write(rss_content)

print("RSS feed updated!")
