from bs4 import BeautifulSoup
from googletrans import Translator

def translate_html(file_path, dest_lang):
    translator = Translator()
    with open(file_path, 'r', encoding='utf-8') as file:
        soup = BeautifulSoup(file, 'html.parser')

    for tag in soup.find_all(text=True):
        if tag.parent.name not in ['script', 'style']:
            translated = translator.translate(tag, dest=dest_lang).text
            tag.replace_with(translated)

    new_file_path = f'translated_{dest_lang}.html'
    with open(new_file_path, 'w', encoding='utf-8') as file:
        file.write(str(soup))

    return new_file_path

# Use the function to create translated documents
translate_html('original.html', 'en')
translate_html('original.html', 'ru')
translate_html('original.html', 'it')
