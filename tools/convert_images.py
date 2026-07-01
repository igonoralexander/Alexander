from PIL import Image
from pathlib import Path
import sys

ROOT = Path('public/frontend/images')
SIZES = [360, 768, 1200]
QUALITY = 80

if not ROOT.exists():
    print('Images root not found:', ROOT)
    sys.exit(1)

for p in ROOT.rglob('*'):
    if p.suffix.lower() not in ('.jpg', '.jpeg', '.png'):
        continue
    # skip already webp outputs
    try:
        img = Image.open(p)
    except Exception as e:
        print('skip', p, 'err', e)
        continue
    orig_w, orig_h = img.size
    name = p.stem
    parent = p.parent
    # create webp of original size if not exists
    target = parent / (name + '.webp')
    if not target.exists():
        try:
            img.save(target, 'WEBP', quality=QUALITY)
            print('created', target)
        except Exception as e:
            print('failed', target, e)
    for w in SIZES:
        if orig_w <= w:
            continue
        out = parent / f"{name}-{w}.webp"
        if out.exists():
            continue
        h = int(orig_h * w / orig_w)
        try:
            resized = img.resize((w, h), Image.LANCZOS)
            resized.save(out, 'WEBP', quality=QUALITY)
            print('created', out)
        except Exception as e:
            print('failed', out, e)

print('done')
