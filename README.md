# weblite

Simplified framework for website

And here's some code! :+1:

```php
class ControllerHome extends Controller {
    public function index(){
        $this->children = array('footer', 'header');
        $this->response->setOutput($this->render());
    }
}
```

Developing [Colony](https://koloni.com.tr)


