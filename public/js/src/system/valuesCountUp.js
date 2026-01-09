// Animate a number from zero to the target value.
export default function valuesCountUp(element, toValue, options = {}) {
    if (!element) {
        return;
    }

    const duration = Number.isFinite(options.duration) ? options.duration : 800;
    const format = typeof options.format === 'function' ? options.format : (value) => value.toString();

    const startValue = 0;
    const startTime = performance.now();

    // Per-frame updater for the animation.
    const tick = (now) => {
        const elapsed = now - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const currentValue = startValue + (toValue - startValue) * progress;

        element.textContent = format(currentValue);

        if (progress < 1) {
            requestAnimationFrame(tick);
        }
    };

    requestAnimationFrame(tick);
}
