# A sample Guardfile
# More info at https://github.com/guard/guard#readme

guard 'sass', :input => 'css'

guard 'stylus', :output => 'css', :all_on_start => false, :all_on_change => true do
  watch(%r{.+\.(styl)})
end

guard 'livereload' do
 
  watch(%r{.+\.(styl|css|js|php)})
  
end
