import valuesCountUp from './valuesCountUp';

// Sum data-value values by data-type and update matching totals.
export default function sumValues() {
    const sources = document.querySelectorAll('[data-type][data-value]');
    if (sources.length === 0) {
        return;
    }

    const totals = new Map();

    sources.forEach((source) => {
        const key = source.getAttribute('data-type');
        if (!key) {
            return;
        }

        const rawValue = source.getAttribute('data-value');
        const value = rawValue === null ? Number.NaN : Number.parseFloat(rawValue);

        if (!Number.isFinite(value)) {
            return;
        }

        totals.set(key, (totals.get(key) ?? 0) + value);
    });

    const formatter = new Intl.NumberFormat(undefined, {
        maximumFractionDigits: 0,
    });

    totals.forEach((sum, key) => {
        document.querySelectorAll(`[data-value-sum="${key}"]`).forEach((target) => {
            valuesCountUp(target, sum, { format: (value) => formatter.format(Math.round(value)) });
        });
    });
}
