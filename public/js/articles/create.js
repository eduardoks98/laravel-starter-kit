(function() {
    class SimpleImage {
        static get toolbox() {
            return {
                title: 'ImageSimple',
                icon: '<svg width="17" height="15" viewBox="0 0 336 276" xmlns="http://www.w3.org/2000/svg"><path d="M291 150V79c0-19-15-34-34-34H79c-19 0-34 15-34 34v42l67-44 81 72 56-29 42 30zm0 52l-43-30-56 30-81-67-66 39v23c0 19 15 34 34 34h178c17 0 31-13 34-29zM79 0h178c44 0 79 35 79 79v118c0 44-35 79-79 79H79c-44 0-79-35-79-79V79C0 35 35 0 79 0z"/></svg>'
            };
        }
        constructor({
            data
        }) {
            this.data = data;
            this.wrapper = undefined;
        }
        render() {
            this.wrapper = document.createElement('div');
            const input = document.createElement('input');
            this.wrapper.classList.add('simple-image');
            this.wrapper.appendChild(input);
            input.placeholder = 'Paste an image URL...';
            input.value = this.data && this.data.url ? this.data.url : '';
            input.addEventListener('paste', (event) => {
                this._createImage(event.clipboardData.getData('text'));
            });
            return this.wrapper;
        }
        _createImage(url) {
            const image = document.createElement('img');
            const caption = document.createElement('input');
            image.src = url;
            caption.placeholder = 'Caption...';
            this.wrapper.innerHTML = '';
            this.wrapper.appendChild(image);
            this.wrapper.appendChild(caption);
        }
        save(blockContent) {
            const image = blockContent.querySelector('img');
            const caption = blockContent.querySelector('input');
            return {
                url: image.src,
                caption: caption.value
            }
        }
        validate(savedData) {
            if (!savedData.url.trim()) {
                return false;
            }
            return true;
        }
    }
    const editor = new EditorJS({
        autofocus: true,
        tools: {
            embed: {
                class: Embed,
                inlineToolbar: true
            },
            quote: Quote,
            Marker: {
                class: Marker,
                shortcut: 'CMD+SHIFT+M',
            },
            code: CodeTool,
            linkTool: {
                class: LinkTool,
                config: {
                    endpoint: 'http://localhost:8008/fetchUrl', // Your backend endpoint for url data fetching,
                }
            },
            delimiter: Delimiter,
            inlineCode: {
                class: InlineCode,
                shortcut: 'CMD+SHIFT+M',
            },
            raw: RawTool,
            warning: Warning,
            list: {
                class: List,
                inlineToolbar: true,
                config: {
                    defaultStyle: 'unordered'
                }
            },
            image: {
                class: ImageTool,
                config: {
                    endpoints: {
                        byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
                        byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
                    }
                }
            },
            simple: SimpleImage,
            header: {
                class: Header,
                config: {
                    placeholder: 'Escreva um título',
                    defaultLevel: 2
                }
            },
        },
        data: {
            "time": 1659628099303,
            "blocks": [
                {
                    "id": "JmiZbyRZ1Z",
                    "type": "header",
                    "data": {
                        "text": "Escreva um título",
                        "level": 2
                    }
                },
                {
                    "id": "KhA0RMf0jS",
                    "type": "paragraph",
                    "data": {
                        "text": "Escreva aqui seu artigo"
                    }
                },
                {
                    "id": "Hi7dsYKpXK",
                    "type": "linkTool",
                    "data": {
                        "link": "teste",
                        "meta": {}
                    }
                },
                {
                    "id": "CcaRS7O4HN",
                    "type": "raw",
                    "data": {
                        "html": ""
                    }
                },
                {
                    "id": "WHg2Ttd-Ju",
                    "type": "warning",
                    "data": {
                        "title": "teste",
                        "message": "setes"
                    }
                },
                {
                    "id": "wmkodxGMV_",
                    "type": "list",
                    "data": {
                        "style": "ordered",
                        "items": [
                            "testes",
                            "test",
                            "est",
                            "est"
                        ]
                    }
                },
                {
                    "id": "EKBMteG7Ps",
                    "type": "quote",
                    "data": {
                        "text": "tsetes",
                        "caption": "testes",
                        "alignment": "left"
                    }
                },
                {
                    "id": "CvJh2Nm8VU",
                    "type": "code",
                    "data": {
                        "code": "tseestestestestes\ntest\nes\nes\nt"
                    }
                }
            ],
            "version": "2.25.0"
        }
    });
    const salvar = $('#_salvar_article');
    const storeUrl = salvar.attr('data-action');
    salvar.click(async() => {
        var form = {};
        await editor.save().then(savedData => {
            form.article = savedData;
        });
        await Util.salvar(storeUrl, form);
    })
    $(document).ready(function() {
        $('#_articles_link').addClass('active');
    });
})()