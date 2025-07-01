# PruebasCodex
Pruebas de Codex

## Requirements

This example requires **matplotlib** and **pillow** for saving the GIF
animation:

```bash
pip install matplotlib pillow
```

## Usage

Running the script opens a window showing the animation. A GIF named
`animation.gif` is also saved by default. For example, the provided
script animates a dot moving along a diagonal line:

The dot moves at 0.4 seconds between steps by default. You can pass the
`step_time` argument to ``animate_point`` to change the speed.

```bash
python animate_point.py
```


