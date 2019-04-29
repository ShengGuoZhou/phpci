# phpci

src目录用于存放项目源代码，文件夹命名必须与命名空间一致，以便可以进行类的自动载入

tests 目录放置单元测试代码，推荐与src目录保持一样的结构，在文件夹与文件名后缀Test以避免重名。

tests/Bootstrap.php 不是必须的，但一般都会存在，主要用于初始化类的自动载入功能

tests/phpunit.xml.dist 是PHPUnit的配置文件，一般来说可以简单配置一下要测试的目录以及Bootstrap.php的位置，详细的可配置项参考官网说明

vendor 目录用于放置项目依赖的第三方类库。

.travis.yml 是Travis CI的配置文件，在这个文件中可以设置项目语言，测试环境等。可以参考Travis CI详细设置

composer.json 是Composer管理第三方类库依赖关系的配置文件，参考Composer详细文档

LICENSE 内文是当前项目使用的许可证
