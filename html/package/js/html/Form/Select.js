import FormBaseContainer from "./Base.js";
import OptionContainer from "./Select/Option.js";

export default class SelectContainer extends FormBaseContainer {


    constructor(parentContainer) {
        super("select", parentContainer);
    }


    addItem(value, label) {

        let option=new OptionContainer(this);  // = document.createElement("option");
        option.value = value;
        option.label = label;
        //option.innerText = label;

        //option.paddingPixel=20;

        return this;

        //this._htmlElement.appendChild(option);

    }


    clearItem() {
        this.emptyContainer();
    }


    set name(value) {
        this._htmlElement.name = value;
    }


    set multiple(value) {

        if (value) {
            this.addAttributeWithoutValue("multiple");
        }

    }


    set value(value) {

        this._htmlElement.value = value;

    }

    get value() {

        return this._htmlElement.value;

    }


    getSelectedDataAttribute(name) {

        let option = this._htmlElement.options[this._htmlElement.selectedIndex];
        let value = option.getAttribute("data-" + name);
        return value;

    }


    get text() {

        return this._htmlElement.options[this._htmlElement.selectedIndex].innerHTML;

    }

}




