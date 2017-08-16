;(function(window) {

    function KskAttributeMaxLength() {

        var config = window.document.getElementById('ksk-attribute-max-length');

        var attributeName = config.dataset.attributeName,
            maxlength = config.dataset.maxLength,
            charCounterContainer = window.document.createElement('span');

        window.document.getElementsByName('__attribute_' + attributeName).forEach(function(area) {
            if (area.hasAttribute('maxlength')) {
                return;
            }

            area.setAttribute('maxlength', maxlength);

            while (charCounterContainer.lastChild) {
                charCounterContainer.removeChild(charCounterContainer.lastChild);
            }
            charCounterContainer.appendChild(window.document.createTextNode(area.value.length + ' / ' + maxlength));
            area.parentElement.appendChild(charCounterContainer);

            area.addEventListener('input', function() {
                while (charCounterContainer.lastChild) {
                    charCounterContainer.removeChild(charCounterContainer.lastChild);
                }
                charCounterContainer.appendChild(window.document.createTextNode(this.value.length + ' / ' + maxlength));
            }, false);
        });

        window.setTimeout(KskAttributeMaxLength, 500);

    }

    KskAttributeMaxLength();

})(window);
