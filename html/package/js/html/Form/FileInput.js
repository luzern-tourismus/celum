import InputContainer from "./Input.js";

export default class FileInputContainer extends InputContainer {

    constructor(parentContainer) {
        super(parentContainer);
        this._htmlElement.type = "file";
    }


    getFile() {
        return this._htmlElement.files[0];
    }


    getFileList() {
        for (let i = 0; i < this._htmlElement.files.length; ++i) {
            var name = this._htmlElement.files.item(i).name;
        }
    }


    set multiple(value) {
        if (value) {
            this.addAttributeWithoutValue("multiple");
        }
    }


    set accept(value) {
        this.addAttribute("accept", value);
    }


    set capture(value) {
        this.addAttribute("capture", value);
    }

}