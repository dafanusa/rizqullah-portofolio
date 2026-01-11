import './bootstrap';

const setupTabs = () => {
    const tabButtons = document.querySelectorAll('[data-tab]');
    const tabPanels = document.querySelectorAll('[data-tab-panel]');

    if (!tabButtons.length || !tabPanels.length) {
        return;
    }

    tabButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-tab');

            tabButtons.forEach((btn) => btn.setAttribute('data-active', btn === button ? 'true' : 'false'));
            tabPanels.forEach((panel) => {
                const isTarget = panel.getAttribute('data-tab-panel') === target;
                panel.classList.toggle('hidden', !isTarget);
            });
        });
    });
};

const setupFilters = () => {
    if (document.querySelector('[data-portfolio-show="filtered"]')) {
        return;
    }
    const filterButtons = document.querySelectorAll('[data-filter]');
    const cards = document.querySelectorAll('[data-category]');

    if (!filterButtons.length || !cards.length) {
        return;
    }

    const hasActive = Array.from(filterButtons).some((button) => button.getAttribute('data-active') === 'true');
    if (!hasActive) {
        filterButtons[0].setAttribute('data-active', 'true');
    }

    const applyFilter = (filter) => {
        cards.forEach((card) => {
            const match = card.getAttribute('data-category') === filter;
            card.classList.toggle('hidden', !match);
        });
    };

    const activeFilter = Array.from(filterButtons).find((button) => button.getAttribute('data-active') === 'true');
    if (activeFilter) {
        applyFilter(activeFilter.getAttribute('data-filter'));
    }

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            filterButtons.forEach((btn) => btn.setAttribute('data-active', btn === button ? 'true' : 'false'));
            applyFilter(filter);
        });
    });
};

const setupCertificates = () => {
    const modal = document.getElementById('certificateModal');
    const modalImage = document.getElementById('certificateImage');
    const modalPdf = document.getElementById('certificatePdf');
    const modalTitle = document.getElementById('certificateTitle');
    const downloadLink = document.getElementById('certificateDownload');
    const closeButton = document.getElementById('certificateClose');
    const cards = document.querySelectorAll('[data-cert-src]');

    if (!modal || !modalImage || !modalTitle || !closeButton || !cards.length) {
        return;
    }

    const getCertExtension = (src) => {
        if (!src) return 'jpg';
        const cleanSrc = src.split('?')[0].toLowerCase();
        const parts = cleanSrc.split('.');
        return parts.length > 1 ? parts[parts.length - 1] : 'jpg';
    };

    const normalizeAssetUrl = (src) => {
        if (!src) return src;
        try {
            const url = new URL(src, window.location.origin);
            if (url.origin !== window.location.origin) {
                return encodeURI(`${window.location.origin}${url.pathname}`);
            }
            return encodeURI(url.toString());
        } catch (error) {
            return encodeURI(src);
        }
    };

    const updateCertificatePreview = (previewSrc, fileSrc, title) => {
        const previewUrl = normalizeAssetUrl(previewSrc);
        const fileUrl = normalizeAssetUrl(fileSrc || previewSrc);
        const previewExt = getCertExtension(previewUrl);
        const fileExt = getCertExtension(fileUrl || previewUrl);
        const isPdfPreview = previewExt === 'pdf';
        const downloadName = `${(title || 'certificate').replace(/\s+/g, '-').toLowerCase()}.${fileExt}`;

        modalTitle.textContent = title || 'Certificate';

        if (downloadLink) {
            downloadLink.href = fileUrl || previewUrl || '#';
            if (fileExt === 'pdf') {
                downloadLink.removeAttribute('download');
            } else {
                downloadLink.setAttribute('download', downloadName);
            }
        }

        if (modalPdf) {
            modalPdf.classList.toggle('hidden', !isPdfPreview);
            modalPdf.src = isPdfPreview ? (fileUrl || previewUrl || '') : '';
        }

        if (modalImage) {
            modalImage.classList.toggle('hidden', isPdfPreview);
            modalImage.src = !isPdfPreview ? (previewUrl || '') : '';
        }
    };

    const forceDownload = async (url, filename) => {
        try {
            const response = await fetch(url, { credentials: 'same-origin' });
            if (!response.ok) {
                return false;
            }
            const blob = await response.blob();
            const objectUrl = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = objectUrl;
            if (filename) {
                link.download = filename;
            }
            document.body.appendChild(link);
            link.click();
            link.remove();
            URL.revokeObjectURL(objectUrl);
            return true;
        } catch (error) {
            return false;
        }
    };

    const bindCertificateDownload = () => {
        if (!downloadLink || downloadLink.getAttribute('data-bound') === 'true') {
            return;
        }
        downloadLink.setAttribute('data-bound', 'true');
        downloadLink.addEventListener('click', async (event) => {
            if (!downloadLink.href || downloadLink.href === '#') return;
            if (downloadLink.hasAttribute('download')) {
                event.preventDefault();
                const filename = downloadLink.getAttribute('download') || '';
                const ok = await forceDownload(downloadLink.href, filename);
                if (!ok) {
                    window.location.assign(downloadLink.href);
                }
                return;
            }
            event.preventDefault();
            window.location.assign(downloadLink.href);
        });
    };


    const ensurePdfPlaceholder = (card, previewSrc, fileSrc) => {
        if (getCertExtension(fileSrc) !== 'pdf') return;
        if (getCertExtension(previewSrc) !== 'pdf') return;
        const img = card.querySelector('img');
        if (!img || !img.parentElement) return;
        if (img.parentElement.querySelector('[data-cert-placeholder]')) return;
        img.classList.add('hidden');

        const placeholder = document.createElement('div');
        placeholder.setAttribute('data-cert-placeholder', 'true');
        placeholder.className = 'absolute inset-0 flex flex-col items-center justify-center gap-2 bg-slate-950/70 text-amber-200';
        placeholder.innerHTML = '<span class="text-sm font-semibold uppercase tracking-[0.35em]">PDF</span><span class="text-[10px] uppercase tracking-[0.25em] text-slate-300">Click to preview</span>';
        img.parentElement.appendChild(placeholder);
    };

    cards.forEach((card) => {
        const src = card.getAttribute('data-cert-src');
        const fileSrc = card.getAttribute('data-cert-pdf') || src;
        const previewSrc = card.getAttribute('data-cert-preview') || src;

        card.addEventListener('click', () => {
            const title = card.getAttribute('data-cert-title') || 'Certificate';
            updateCertificatePreview(previewSrc, fileSrc, title);
            modal.showModal ? modal.showModal() : modal.setAttribute('open', 'true');
        });
        ensurePdfPlaceholder(card, previewSrc, fileSrc);
    });
    bindCertificateDownload();

    closeButton.addEventListener('click', () => modal.close());
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.close();
        }
    });
};

document.addEventListener('DOMContentLoaded', () => {
    setupTabs();
    setupFilters();
    setupCertificates();
});

const hideLoader = () => {
    const loader = document.getElementById('loadingScreen');
    if (!loader) {
        return;
    }

    loader.classList.add('opacity-0');
    setTimeout(() => {
        loader.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }, 700);
};

const runLoaderText = () => {
    const loaderUrl = document.getElementById('loaderUrl');
    if (!loaderUrl) {
        hideLoader();
        return;
    }

    const fullText = loaderUrl.textContent || '';
    loaderUrl.textContent = '';
    let index = 0;

    const interval = setInterval(() => {
        loaderUrl.textContent += fullText.charAt(index);
        index += 1;
        if (index >= fullText.length) {
            clearInterval(interval);
            setTimeout(hideLoader, 2000);
        }
    }, 80);
};

window.addEventListener('load', () => {
    runLoaderText();
});
