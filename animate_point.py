import matplotlib.pyplot as plt
import matplotlib.animation as animation


def animate_point(points, step_time=0.4, output='animation.gif'):
    """Animate a dot moving along the provided list of points.

    Parameters
    ----------
    points : list of tuple(float, float)
        Sequence of (x, y) coordinates describing the path.
    step_time : float, optional
        Seconds between each frame of the animation.
    output : str, optional
        Filename for the resulting GIF animation.
    """
    if not points:
        raise ValueError("Points list must not be empty")

    xs, ys = zip(*points)
    fig, ax = plt.subplots()
    ax.set_xlim(min(xs) - 1, max(xs) + 1)
    ax.set_ylim(min(ys) - 1, max(ys) + 1)
    dot, = ax.plot([], [], 'ro')

    def init():
        dot.set_data([], [])
        return dot,

    def update(frame):
        x, y = points[frame]
        # set_data expects sequences, so wrap scalars in lists
        dot.set_data([x], [y])
        return dot,

    ani = animation.FuncAnimation(
        fig,
        update,
        frames=len(points),
        init_func=init,
        interval=step_time * 1000,
        blit=True,
        repeat=False,
    )
    if output:
        ani.save(output, writer=animation.PillowWriter(fps=1 / step_time))
    plt.show()


if __name__ == "__main__":
    # Example: a diagonal line from (0,0) to (5,5)
    path = [(x, x) for x in range(6)]
    animate_point(path)
