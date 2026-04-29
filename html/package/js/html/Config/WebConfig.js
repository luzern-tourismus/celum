export default class WebConfig {

    static webUrl = '/';

    static loadCurrentWeb(language = null) {

        WebConfig.webUrl = (new URL(import.meta.url)).origin + "/";

        if (language !== null) {
            WebConfig.webUrl = WebConfig.webUrl + language + "/";
        }

    }

}